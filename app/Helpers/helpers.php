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

        if (! app()->environment('local')) {
            // Ensure you replace `mydomainmain.com` with your actual domain
            $domain = config('app.url'); // e.g. https://mydomainmain.com
            $cleanDomain = parse_url($domain, PHP_URL_HOST);

            return "https://cdn.statically.io/img/{$cleanDomain}/{$path}";
        }

        // In local/development, just return the normal path
        return asset($path);
    }
}

if (! function_exists('cdn_asset')) {
    /**
     * Get asset URL, using jsDelivr in non-development environments.
     *
     * @param string $path Relative path to asset
     * @return string
     */
    function cdn_asset(string $path): string
    {
        if (!app()->environment('local')) {
            $username = config('app.asset_cdn_username');
            $repo = config('app.asset_cdn_repo');

            // Build jsDelivr path
            return "https://cdn.jsdelivr.net/gh/{$username}/{$repo}/public/{$path}";
        }

        // Use normal Laravel asset() in local
        return asset($path);
    }
}
