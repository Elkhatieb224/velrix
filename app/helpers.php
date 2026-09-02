<?php

use App\Support\FigmaAsset;

if (! function_exists('figma_asset')) {
    function figma_asset(string $variable, ?string $page = null): string
    {
        return FigmaAsset::url($variable, $page);
    }
}
