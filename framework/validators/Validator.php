<?php declare(strict_types = 1);

namespace kiki\validators;

class Validator
{
    use Required,
        Trim,
        Boolean;

    public $isValid = true;
    public $value;
    public $field;

    public function run(&$value)
    {
        $this->value = &$value;
        return $this;
    }
}
