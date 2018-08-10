<?php

class Dater
{
    /**
     * @var string
     */
    private $data;

    /**
     * Dater constructor.
     */
    public function __construct()
    {
        $this->data = 'New Data Pacegist';
    }

    /**
     * @return string
     */
    public function getData1() : string
    {
        echo $this->data;
    }
}