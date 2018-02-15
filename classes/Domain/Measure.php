<?php

namespace Domain;

class Measure {

    public $temperature;
    public $humidity;
    public $datetime;
    public function __construct($temperature, $humidity, $datetime)
    {
        $this->humidity = $humidity;
        $this->temperature = $temperature;
        $this->datetime = $datetime;
    }
}
