<?php declare(strict_types = 1);

namespace kiki\db;

use kiki\validators\Validator;

class ActiveRecord
{
    protected $validator;
    public $name;

    public function __construct(Validator $validator)
    {
        $this->validator = $validator;
    }

    protected function validate($field)
    {
        return $this->validator->run($field);
    }

    public function rules()
    {
        $this->validate('name')->required()->integer()->string()->match();
        $this->validate('field')->required()->trim()->filter()->match();
    }
}
