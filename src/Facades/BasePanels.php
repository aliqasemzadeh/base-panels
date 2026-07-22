<?php

declare(strict_types=1);

namespace BasePanels\BasePanels\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \BasePanels\BasePanels\BasePanels
 */
class BasePanels extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \BasePanels\BasePanels\BasePanels::class;
    }
}
