<?php

namespace Layerworx\Patternfly;

class Facade extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'patternfly';
    }
}
