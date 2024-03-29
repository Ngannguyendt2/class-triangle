<?php


class Triangle extends Shape
{
    protected $side1 = 1.0;
    protected $side2 = 1.0;
    protected $side3 = 1.0;

    public function __construct($name)
    {
        parent::__construct($name);
        $this->side1;
        $this->side2;
        $this->side3;
    }

    /**
     * @return float
     */
    public function getSide1()
    {
        return $this->side1;
    }

    /**
     * @return float
     */
    public function getSide2()
    {
        return $this->side2;
    }

    /**
     * @return float
     */
    public function getSide3()
    {
        return $this->side3;
    }

    /**
     * @param float $side1
     */
    public function setSide1($side1)
    {
        $this->side1 = $side1;
    }

    /**
     * @param float $side2
     */
    public function setSide2($side2)
    {
        $this->side2 = $side2;
    }

    /**
     * @param float $side3
     */
    public function setSide3($side3)
    {
        $this->side3 = $side3;
    }

    public function getPerimeter()
    {
        return $this->getSide1() + $this->getSide2() + $this->getSide3();
    }

    public function getArea()
    {
        $p = $this->getPerimeter() / 2;
        $area = sqrt($p * ($p - $this->getSide1()) * ($p - $this->getSide2()) * ($p - $this->getSide3()));
        return $area;
    }

    public function toString()
    {
        return "Area: " . $this->getArea() . " Perimeter: " . $this->getPerimeter();
    }
}