<?php
class Circle extends Shape{
    const SHAPE_TYPE = 3;
        protected $radius;

    function __construct($radius){
        $this->radius = $radius;
        parent::_construct(0,0);
    }

    public function __area($radius){
        echo pi() * $radius;

    }
    public function __getFullDescription($id, $name, $radius){
       echo "Circle<$id>: $name - $radius";

    }

}

