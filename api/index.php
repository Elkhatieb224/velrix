<?php

/**
 * Vercel serverless entry — forwards requests to Laravel.
 */
if (getenv('VERCEL')) {
    $host = $_SERVER['HTTP_HOST'] ?? getenv('VERCEL_URL');
    $appUrl = 'https://'.$host;
    putenv('APP_URL='.$appUrl);
    $_ENV['APP_URL'] = $appUrl;
    $_SERVER['APP_URL'] = $appUrl;
    $_SERVER['HTTPS'] = 'on';
    $_SERVER['HTTP_X_FORWARDED_PROTO'] = 'https';
}

require __DIR__.'/../public/index.php';
