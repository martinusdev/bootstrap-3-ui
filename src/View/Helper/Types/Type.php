<?php
declare(strict_types=1);

namespace Bootstrap3UI\View\Helper\Types;

use ReflectionClass;

/**
 * Type
 */
abstract class Type implements TypeInterface
{
    /**
     * Get all constant values of a class
     *
     * @return array|mixed
     * @throws \ReflectionException
     */
    public static function values()
    {
        $called = static::class;
        $reflection = new ReflectionClass($called);
        $elements = $reflection->getConstants();

        return array_values($elements);
    }
}
