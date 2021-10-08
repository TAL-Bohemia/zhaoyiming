<?php

class Multiton
{
    private static $instances = [];

    public static function instance($configName = 'a')
    {
        if (!array_key_exists($configName, self::$instances)) {
            self::$instances[$configName] = new self($configName);
        }

        return self::$instances[$configName];
    }

    private function __construct($config)
    {
        echo $config . PHP_EOL;
    }
}

Multiton::instance('a');
Multiton::instance('b');