<?php


class QuadraticEquation
{
    private $numberA;
    private $numberB;
    private $numberC;
    private $delta;

    public function __construct($numberA, $numberB, $numberC)
    {
        $this->numberA = $numberA;
        $this->numberB = $numberB;
        $this->numberC = $numberC;
    }

    public function getNumberA()
    {
        return $this->numberA;
    }

    public function getNumberB()
    {
        return $this->numberB;
    }

    public function getNumberC()
    {
        return $this->numberC;
    }

    public function getDiscriminant()
    {
        $this->delta = ($this->numberB * $this->numberB) - (4 * $this->numberA * $this->numberC);
    }

    public function getRoot()
    {
        try {
            if ($this->numberA == 0) throw new Error('This is not a quadratic equation!');
        } catch (Error $e) {
            return $e->getMessage();
        }
        if ($this->delta == 0) {
            return "The equation has one root r = " . (-$this->numberB / 2 * $this->numberA);
        } elseif ($this->delta > 0) {
            return "The equation has two roots: r1 = " . (-$this->numberB + sqrt($this->delta) / 2 * $this->numberA) . " & r2 = " . (-$this->numberB - sqrt($this->delta) / 2 * $this->numberA);
        } elseif ($this->delta < 0) {
            return "The equation has no real roots!";
        }
    }
}
