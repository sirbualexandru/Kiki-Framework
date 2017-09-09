<?php

namespace kiki\mvc;

interface Observable
{
    /**
     * @param Observer $observer
     *
     * @return mixed
     */
    public function addObserver(Observer $observer);

    /**
     * @param Observer $observer
     *
     * @return mixed
     */
    public function removeObserver(Observer $observer);

    /**
     * Execute methods Observer::handleEvent for all observers
     *
     * @return void
     */
    public function notifyObservers();
}
