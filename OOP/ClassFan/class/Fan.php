<?php


class Fan
{
    const SLOW = 1;
    const MEDIUM = 2;
    const FAST = 3;
    private $speed;
    private $on;
    private $radius;
    private $color;

    public function __construct()
    {
        $this->speed = self::SLOW;
        $this->on = false;
        $this->radius = 5;
        $this->color = "blue";
    }

    private function getSpeed()
    {
        return $this->speed;
    }

    private function getRadius()
    {
        return $this->radius;
    }

    private function getColor()
    {
        return $this->color;
    }

    public function setSpeed($speed)
    {
        return $this->speed = $speed;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    private function getStatus()
    {
        return $this->on;
    }

    public function setStatus()
    {
        if ($this->on) {
            $this->on = false;
        } else $this->on = true;
    }

    public function toString()
    {
        if ($this->on) {
            return ("Speed: " . $this->getSpeed() . "<br>" . "Color: " . $this->getColor() . "<br>" . "Radius: " . $this->getRadius() . "<br>" . "Fan is on.");
        } else {
            return ("Color: " . $this->getColor() . "<br>" . "Radius: " . $this->getRadius() . "<br>" . "Fan is off.");
        }
    }
}