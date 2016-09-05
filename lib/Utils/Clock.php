<?php
namespace Lib\Utils;

class Clock
{
    protected $start;

    public function __construct()
    {
        $this->start = $this->now();
    }

    public function spent()
    {
        $end = $this->now();
        return round(($end - $this->start) * 1000, 2);
    }

    protected function now()
    {
        list($usec, $sec) = explode(" ", microtime());
        return ((float)$usec + (float)$sec);
    }
}
