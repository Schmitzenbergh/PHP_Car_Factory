<?php

class car
{
    private $engine;
    private $wheels;
    private $model;
    private $brand;
    private $colour;
    private $radio;

    /**
     * car constructor.
     * @param $engine
     * @param $wheels
     * @param $model
     * @param $brand
     * @param $colour
     */
    public function __construct($engine, $wheels, $model, $brand, $colour)
    {
        $this->engine = $engine;
        $this->wheels = $wheels;
        $this->model = $model;
        $this->brand = $brand;
        $this->colour = $colour;
    }

    /**
     * @return string
     */
    public function describeCar()
    {
        $return = "===Car===\n";
        $return .= "Engine: {$this->engine} \n";
        $return .= "Wheels: {$this->wheels} \n";
        $return .= "Model: {$this->model} \n";
        $return .= "Brand: {$this->brand} \n";
        $return .= "Colour: {$this->colour->describeColour()} \n";

        return $return;
    }

    /**
     * @param string $engine
     */
    public function setEngine($engine)
    {
        $this->engine = $engine;
    }

    /**
     * @param string $wheels
     */
    public function setWheels(string $wheels)
    {
        $this->wheels = $wheels;
    }

    /**
     * @param string $model
     */
    public function setModel(string $model)
    {
        $this->model = $model;
    }

    /**
     * @param colour $colour
     */
    public function setColour(colour $colour)
    {
        $this->colour = $colour;
    }
}