<?php

namespace BazaarCorner\Services\Traits;

trait SluggableValue
{
    private function getSlugValue($text)
    {
        return str_replace(" ", "_", strtolower($text));        
    }
}