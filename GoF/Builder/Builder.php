<?php

class Car
{
    protected $color;
    protected $brand;
    protected $price;

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function __toString()
    {
        return "这辆车是{$this->brand}品牌,{$this->color}颜色, 价值{$this->price}元";
    }

}

class CarBuilder
{
    public $car;

    public function __construct()
    {
        $this->car = new Car();
    }

    public function setColor($color)
    {
        $this->car->setColor($color);

        return $this;
    }

    public function setBrand($brand)
    {
        $this->car->setBrand($brand);

        return $this;
    }

    public function setPrice($price)
    {
        $this->car->setPrice($price);

        return $this;
    }

    public function getCar()
    {
        echo $this->car . PHP_EOL;
    }

}

class Director
{
    public static function bmw(CarBuilder $builder)
    {
        $builder->setColor('红')->setBrand('宝马')->setPrice('50万');
    }

    public static function audi(CarBuilder $builder)
    {
        $builder->setColor('黑')->setBrand('奥迪')->setPrice('80万');
    }
}

class Test
{
    public static function getBmw()
    {
        $builder = new CarBuilder();
        Director::bmw($builder);
        $builder->getCar();
    }

    public static function getAudi()
    {
        $builder = new CarBuilder();
        Director::audi($builder);
        $builder->getCar();
    }
}

Test::getBmw();
Test::getAudi();
