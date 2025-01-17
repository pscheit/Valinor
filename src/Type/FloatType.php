<?php

declare(strict_types=1);

namespace CuyZ\Valinor\Type;

/** @api */
interface FloatType extends ScalarType
{
    public function cast($value): float;
}
