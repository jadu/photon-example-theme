<?php

namespace ExampleTheme;

use Jadu\Symfony\Kernel\Bundle\RouteableInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class ExampleThemeBundle extends Bundle implements RouteableInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getRouteConfigDir()
    {
        return __DIR__ . '/Resources/config';
    }
}
