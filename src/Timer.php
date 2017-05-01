<?php

namespace Bergau;

class Timer
{
    private $started;
    private $stopped;

    public function start()
    {
        $this->started = microtime(true);
    }

    public function stop()
    {
        $this->stopped = microtime(true);
    }

    public function getTime()
    {
        return $this->stopped - $this->started;
    }
}
