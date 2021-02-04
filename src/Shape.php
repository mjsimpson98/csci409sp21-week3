<?php
class Shape{
    //Constant
 const SHAPE_TYPE = 1;

    //Properties
    public $name;
    protected $length;
    protected $width;
    private $id;

    //Constructor
    function __construct($length, $width){
        $this->length = $length;
        $this->width = $width;
        $this->id = uniqid();
    }
    function getName(){
        return $this->name;
    }
    function setName($name){
    $this->name = $name;
    }
    function getId(){
        return $this->id;
    }

    public function area($length, $width){
       return $length * $width;

    }

    public static function getTypeDescription(){
        echo static::SHAPE_TYPE;
    }

    public function getFullDescription($id, $name, $length, $width){
        echo "Shape<$id>: $name - $length x $width";
    }
}

?>