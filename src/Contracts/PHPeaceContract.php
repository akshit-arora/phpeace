<?php

declare(strict_types=1);

namespace AkshitArora\PHPeace\Contracts;

/**
 * Interface PHPeaceContract
 *
 * This is a contract for the PHPeace. It declares the methods that any PHPeace implementation
 * should have. Currently, it requires a method to get a peace quote.
 *
 * @package AkshitArora\PHPeace\Contracts
 */
interface PHPeaceContract
{
    /**
     * Get a peace quote.
     *
     * @return string
     */
    public function getQuote(): string;
}
