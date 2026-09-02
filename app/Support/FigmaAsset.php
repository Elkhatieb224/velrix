<?php

namespace App\Support;

use Illuminate\Support\Facades\Route;

class FigmaAsset
{
    private static ?array $manifest = null;

    public static function path(string $variable, ?string $page = null): string
    {
        $manifest = self::manifest();
        $page ??= self::currentPage();

        if ($page && isset($manifest['pages'][$page][$variable])) {
            return $manifest['pages'][$page][$variable];
        }

        if (isset($manifest['variables'][$variable])) {
            return $manifest['variables'][$variable];
        }

        $qualified = $page ? "{$page}.{$variable}" : null;
        if ($qualified && isset($manifest['variables'][$qualified])) {
            return $manifest['variables'][$qualified];
        }

        return "assets/images/placeholder.png";
    }

    public static function url(string $variable, ?string $page = null): string
    {
        return asset(self::path($variable, $page));
    }

    public static function currentPage(): ?string
    {
        $route = Route::currentRouteName();

        return match ($route) {
            'home' => 'home',
            'about' => 'about',
            'services' => 'services',
            'contact' => 'contact',
            default => 'home',
        };
    }

    private static function manifest(): array
    {
        if (self::$manifest !== null) {
            return self::$manifest;
        }

        $path = public_path('assets/manifest.json');

        if (! is_file($path)) {
            return self::$manifest = ['variables' => [], 'pages' => []];
        }

        return self::$manifest = json_decode(file_get_contents($path), true) ?? ['variables' => [], 'pages' => []];
    }
}
