<?php

namespace kiki;

class Controller
{
    protected $request;
    protected $response;

    public function __construct(\kiki\Request $request)
    {
        $this->request = $request;
    }
}
