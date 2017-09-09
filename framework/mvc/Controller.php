<?php

namespace kiki\mvc;

class Controller implements Observable
{
    /**
     * @var Observer[]
     */
    protected $observers = [];

    /**
     * @param Observer $observer
     *
     * @return mixed
     */
    public function addObserver(Observer $observer)
    {
        $this->observers[get_class($observer)] = $observer;
    }

    /**
     * @param Observer $observer
     *
     * @return mixed
     */
    public function removeObserver(Observer $observer)
    {
        unset($this->observers[get_class($observer)]);
    }

    /**
     * Execute methods Observer::handleEvent for all observers
     *
     * @return void
     */
    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->handleEvent($this);
        }
    }
}
