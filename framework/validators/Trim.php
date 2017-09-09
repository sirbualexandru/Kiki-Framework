<?php declare(strict_types = 1);

namespace kiki\validators;

/**
 * Class Trim
 *
 * @property string|integer|boolean|array|object|null $value
 */
trait Trim
{
    public function trim() : Validator
    {
        $this->value = trim($this->value);
        return $this;
    }
}
