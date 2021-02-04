<?php
class Circle extends Shape{
    const SHAPE_TYPE = 3;
        protected $radius;

   function _construct($radius){
        $this->radius = $radius;
        parent::_construct(0,0);
    }

    public function area($radius){
        $result =pi() * $radius;
        echo $result;
    }
    public function getFullDescription($id, $name, $radius){
       echo "Circle<$id>: $name - $radius";

    }

}
?>
