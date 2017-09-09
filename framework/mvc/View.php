<?php declare(strict_types = 1);

namespace kiki\mvc;

use kiki\Request;
use kiki\Response;

class View implements Observer
{
    protected $request;

    /**
     * View constructor.
     *
     * @param Request $request
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @return Response
     */
    public function handleEvent(Observable $observable)
    {
        echo get_class($observable);
    }
}
