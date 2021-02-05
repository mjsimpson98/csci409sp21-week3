<?php
class Circle extends Shape{
    const SHAPE_TYPE = 3;
        protected $radius;

    function __construct($radius){
        $this->radius = $radius;
        parent::__construct(0,0);
    }

    public function __area($radius){
        echo (pi() * pow($radius,2));

    }
    public function getFullDescription(){
        return "Circle<#" . $this->getId() . ">: $this->name - $this->radius";
    }

}

