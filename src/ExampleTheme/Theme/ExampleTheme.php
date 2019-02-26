<?php

namespace ExampleTheme\Theme;

use Photon\Core\Theme\Theme;

class ExampleTheme implements Theme
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'jadu-example';
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'galaxybase';
    }

    /**
     * {@inheritdoc}
     */
    public function getPath()
    {
        return __DIR__ . '/../Resources/templates';
    }
}
