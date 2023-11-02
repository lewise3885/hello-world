<?php

/**
 * This file is part of lewise3885/hello-world
 *
 * @copyright Copyright (c) Lewis <lewise3885@gmail.com>
 * @license https://opensource.org/license/mit/ MIT License
 */

declare(strict_types=1);

namespace Lewise3885\HelloWorld;

/**
 * An example class to act as a starting point for developing your library
 */
class Example
{
    /**
     * Returns a greeting statement using the provided name
     */
    public function greet(string $name = 'World'): string
    {
        return "Hello, {$name}!";
    }
}
