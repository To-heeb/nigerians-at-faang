<?php

namespace App\Actions;

use App\Models\Tag;
use App\Models\Blog;
use App\Models\Company;
use App\Models\Profile;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;


class BuildSitemap
{
    public function build(): void
    {
        Sitemap::create()
            ->add($this->build_index(Blog::published()->get(), 'sitemap_blogs.xml'))
            ->add($this->build_index(Company::all(), 'sitemap_companies.xml'))
            ->add($this->build_index(Profile::active()->get(), 'sitemap_profiles.xml'))
            ->add($this->build_index(Tag::all(), 'sitemap_tags.xml'))
            ->add(Url::create('/')->setPriority(1)->setChangeFrequency(Url::CHANGE_FREQUENCY_ALWAYS))
            ->add(Url::create('/tags')->setPriority(0.5)->setChangeFrequency(Url::CHANGE_FREQUENCY_ALWAYS))
            ->add(Url::create('/blogs')->setPriority(0.5)->setChangeFrequency(Url::CHANGE_FREQUENCY_ALWAYS))
            ->add(Url::create('/about')->setPriority(0.5)->setChangeFrequency(Url::CHANGE_FREQUENCY_ALWAYS))
            ->add(Url::create('/profiles')->setPriority(0.5)->setChangeFrequency(Url::CHANGE_FREQUENCY_ALWAYS))
            ->add(Url::create('/companies')->setPriority(0.5)->setChangeFrequency(Url::CHANGE_FREQUENCY_ALWAYS))
            ->writeToFile(public_path('sitemap.xml'));
    }

    protected function build_index($model, $path): string
    {
        Sitemap::create()
            ->add($model)
            ->writeToFile(public_path($path));

        return $path;
    }
}
