<?php

namespace Processton\ProcesstonInteraction;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Processton\ProcesstonInteraction\Skeleton\SkeletonClass
 */
class ProcesstonInteractionFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'processton-interaction';
    }
}
