<?php declare(strict_types = 1);

namespace kiki\validators;

trait Required
{
    public function required() : Validator
    {
        $this->value;
        return $this;
    }
}
