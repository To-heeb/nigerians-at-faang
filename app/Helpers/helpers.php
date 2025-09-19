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
