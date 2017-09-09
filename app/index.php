<?php

$container = [];

$container['request'] = new \kiki\Request();

class TestComponent
{
    protected $request;

    public function __construct(\kiki\Request $request)
    {
        $this->request = $request;
    }
}

$component = new TestComponent($container['request']);

$component = $container->get(TestComponent::class);
