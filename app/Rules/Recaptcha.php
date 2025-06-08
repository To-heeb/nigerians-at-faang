<?php

namespace App\Rules;

use Closure;
use Illuminate\Support\Facades\Http;
use Illuminate\Contracts\Validation\ValidationRule;

class Recaptcha implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // config('services.recaptcha.site_verify_url');
        $response = Http::asForm()->post(config('services.recaptcha.site_verify_url'), [
            'secret' => config('services.recaptcha.secret_key'),
            'response' => $value,
            'ip' => request()->ip(),
        ]);
        if (!$response->json('success') && $response->json('score') >= 0.7) {
            $fail('The ' . $attribute . ' is invalid.');
        }
    }
}
