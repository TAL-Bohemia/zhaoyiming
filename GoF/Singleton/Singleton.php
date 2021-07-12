<?php

Class Singleton
{
    private $singleton = null;

    /**
     * @return Singleton
     */
    public function instance()
    {
        return $this->singleton ?? new self();
    }

    /**
     * SingleTon constructor.
     */
    private function __construct(){}
}

