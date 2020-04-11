<?php



class StopWatch
{
    private $startTime;
    private $endTime;

    function __construct()
    {
        $this->startTime = time();
    }

    function start()
    {
        $this->startTime = time();
    }

    function stop()
    {
        $this->endTime = time();
    }

    function getElapsedTime()
    {
        return (1000*($this->endTime - $this->startTime));
    }
}