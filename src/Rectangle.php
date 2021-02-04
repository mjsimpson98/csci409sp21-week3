<?php
class Rectangle extends Shape{
    const SHAPE_TYPE = 2;

    public function getFullDescription($id, $name, $length, $width)
    {
        echo "Rectangle<$id>: $name - $length x $width";
    }
    }
    ?>