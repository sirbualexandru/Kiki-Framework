<?php declare(strict_types = 1);

namespace kiki\mvc;

interface Observer
{
    /**
     * @param Observable $observable
     *
     * @return mixed
     */
    public function handleEvent(Observable $observable);
}
