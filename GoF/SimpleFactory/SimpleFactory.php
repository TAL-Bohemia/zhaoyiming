<?php

class Car
{
    public function __construct()
    {
        echo '汽车' . PHP_EOL;
    }
}

class Suv
{
    public function __construct()
    {
        echo 'Suv' . PHP_EOL;
    }
}

class Trunk
{
    public function __construct()
    {
        echo '卡车' . PHP_EOL;
    }
}

class Factory
{
    public static function create($type)
    {
        switch ($type) {
            case 'suv':
                return new Suv();
            case 'trunk':
                return new Trunk();
            default:
                return new Car();
        }
    }
}

Factory::create('suv');
Factory::create('trunk');
Factory::create('test');
