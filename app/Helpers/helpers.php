<?php

if (!function_exists('share_link')) {
    /**
     * Build a social share link
     *
     * @param string $platform (facebook, twitter, x, linkedin, instagram, tiktok, whatsapp)
     * @param string $url      The URL to share
     * @param string|null $text The optional text/caption
     * @return string
     */
    function share_link(string $platform, string $url, ?string $text = null): string
    {
        $base = config("share.$platform");

        if (!$base) {
            return '#';
        }

        return str_replace(
            ['{url}', '{text}'],
            [urlencode($url), urlencode($text ?? '')],
            $base
        );
    }
}


if (! function_exists('cdn_image')) {
    /**
     * Get image URL, using CDN in non-development environments.
     *
     * @param string $path Relative or absolute path to image
     * @return string
     */
    function cdn_image(string $path): string
    {
        // If already a full URL and app is in production, rewrite with statically
        info("cdn_image", ['got here']);

        if (! app()->environment('local')) {
            // Ensure you replace `mydomainmain.com` with your actual domain
            $domain = config('app.url'); // e.g. https://mydomainmain.com
            $cleanDomain = parse_url($domain, PHP_URL_HOST);

            info("cdn_image", [$domain, $cleanDomain]);

            return "https://cdn.statically.io/img/{$cleanDomain}/{$path}";
        }

        // In local/development, just return the normal path
        return asset($path);
    }
}
