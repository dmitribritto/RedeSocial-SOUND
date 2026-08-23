<?php

function demoAccessToken(): string
{
    $secret = getenv('DEMO_ACCESS_SECRET');
    if ($secret === false || $secret === '') {
        return '';
    }

    return hash_hmac('sha256', 'jow@gmail', $secret);
}

function hasDemoAccess(): bool
{
    $token = demoAccessToken();
    $cookie = $_COOKIE['sound_demo'] ?? '';

    return $token !== '' && is_string($cookie) && hash_equals($token, $cookie);
}

function grantDemoAccess(): bool
{
    $token = demoAccessToken();
    if ($token === '') {
        return false;
    }

    setcookie('sound_demo', $token, [
        'expires' => time() + 86400,
        'path' => '/',
        'secure' => true,
        'httponly' => true,
        'samesite' => 'Lax',
    ]);

    return true;
}
