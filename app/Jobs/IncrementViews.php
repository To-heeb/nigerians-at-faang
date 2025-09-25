<?php

declare(strict_types=1);

namespace App\Jobs;

use App\Models\Tag;
use App\Models\Blog;
use App\Models\Profile;
use App\Services\Firewall;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Queue\SerializesModels;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Bus\PendingDispatch;
use Illuminate\Contracts\Cache\LockTimeoutException;

final class IncrementViews implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @param  Collection<array-key, Blog>|Collection<array-key, Tag>|Collection<array-key, Profile>   $viewables
     */
    public function __construct(private Collection $viewables, private int|string $id)
    {
        //
    }

    /**
     * Dispatch the job using the authenticated user or session id.
     *
     * @param  Collection<array-key, Blog>|Collection<array-key, Tag>|Collection<array-key, Profile> |Blog|Tag|Profile  $viewables
     */
    public static function dispatchUsingSession(Collection|Blog|Tag|Profile $viewables): ?PendingDispatch
    {
        if (app(Firewall::class)->isBot(request())) {
            return null;
        }

        $id = auth()->id() ?? session()->getId();

        /** @var Collection<array-key, Blog>|Collection<array-key, Tag>|Collection<array-key, Profile>  $viewables */
        $viewables = $viewables instanceof Model ? collect([$viewables]) : $viewables;

        return self::dispatch($viewables, $id);
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        if ($this->viewables->isEmpty()) {
            return;
        }

        $key = "viewed.{$this->getModelName()}.for.user.{$this->id}";
        $lock = Cache::lock($key);

        $recentlyViewed = collect();

        try {
            $lock->block(5);

            $recentlyViewed = $this->getRecentlyViewed($key);
        } catch (LockTimeoutException) { // @codeCoverageIgnore
            $this->release(10); // @codeCoverageIgnore
        } finally {
            $lock->release();
        }

        if ($recentlyViewed->isNotEmpty()) {
            /** @var Blog|User $model */
            $model = $recentlyViewed->first();

            /** @var array<int, int> $ids */
            $ids = $recentlyViewed->pluck('id')->toArray();

            $model::incrementViews($ids);
        }
    }

    /**
     * Lowercase name of the model.
     */
    public function getModelName(): string
    {
        if ($this->viewables->isEmpty()) {
            return '';
        }

        /** @var Blog|User $model */
        $model = $this->viewables->first();

        return mb_strtolower(class_basename($model));
    }

    /**
     * Get the recently viewed models.
     *
     * @return Collection<array-key, Blog>
     */
    private function getRecentlyViewed(string $key): Collection
    {
        /** @var array<int, int> $viewed */
        $viewed = Cache::get($key, []);

        $recentlyViewed = $this->viewables->reject(fn(Blog|Tag|Profile $model): bool => in_array($model->id, $viewed, true))->values();

        Cache::put($key, array_unique(array_merge(
            $viewed,
            $recentlyViewed->pluck('id')->toArray(),
        )), now()->addMinutes(120));

        return $recentlyViewed;
    }
}
