<?php
class Circle extends Shape{
    const SHAPE_TYPE = 3;
        protected $radius;

    function __construct($radius){
        $this->radius = $radius;
        parent::__construct(0,0);
    }

    public function __area($radius){
        return pi() * $radius;

    }
    public function getFullDescription()
    {
        return parent::getFullDescription();
    }

}

