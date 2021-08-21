<?php

namespace Hicka\Pos;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Hicka\Pos\Skeleton\SkeletonClass
 */
class PosFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'pos';
    }
}
