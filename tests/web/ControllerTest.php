<?php
namespace tests\web;

use kiki\Controller;
use kiki\web\Application;
use PHPUnit\Framework\TestCase;

/**
 * Class ApplicationTest
 *
 * @package tests\web
 */
class ControllerTest extends TestCase
{
    /** @var  Application */
    protected $app;

    public function setUp()
    {
        parent::setUp();
        $this->app = new Application();
    }

    public function testCreateController()
    {
        $this->assertTrue($this->app->Controller instanceof Controller);
    }
}
