<?php

namespace tests\mvc;

use kiki\mvc\Controller;
use kiki\mvc\View;
use kiki\Request;
use PHPUnit\Framework\TestCase;

class ControllerTest extends TestCase
{
    /**
     * Test
     */
    public function testObserverPattern()
    {
        $controller = new Controller();
        $controller->addObserver(new View(new Request()));
        $this->expectOutputString(Controller::class);
        $controller->notifyObservers();
    }

}
