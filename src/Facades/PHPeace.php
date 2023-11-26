<?php

declare(strict_types=1);

namespace AkshitArora\PHPeace\Facades;

use AkshitArora\PHPeace\PHPeace\PHPeace as PHPeacePHPeace;
use Illuminate\Support\Facades\Facade;

/**
 * Class PHPeace
 *
 * This is a facade for the PHPeace class. It provides a static interface to the
 * PHPeace class which is bound in the service container.
 * This facade is used to fetch peace quotes.
 *
 * @package AkshitArora\PHPeace\Facades
 *
 * @method static string getQuote() Get a peace quote.
 *
 * @see \AkshitArora\PHPeace\PHPeace\PHPeace
 */
final class PHPeace extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return PHPeacePHPeace::class;
    }
}
