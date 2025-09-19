<?php



return [
    'facebook'  => env('SHARE_FACEBOOK', 'https://www.facebook.com/sharer/sharer.php?u={url}'),
    'x'         => env('SHARE_X', 'https://x.com/intent/tweet?url={url}&text={text}'),
    'twitter'   => env('SHARE_X', 'https://x.com/intent/tweet?url={url}&text={text}'),
    'linkedin'  => env('SHARE_LINKEDIN', 'https://www.linkedin.com/sharing/share-offsite/?url={url}'),
    'whatsapp'  => env('SHARE_WHATSAPP', 'https://api.whatsapp.com/send?text={text}'),
    // 'instagram' => env('SHARE_INSTAGRAM', 'https://www.instagram.com/?url={url}'),
    // 'tiktok'    => env('SHARE_TIKTOK', 'https://www.tiktok.com/share?url={url}'),
];
