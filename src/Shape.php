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

    public function area(){
       return $this->length * $this->width;

    }

    public static function getTypeDescription(){
        return static::SHAPE_TYPE;
    }

    public function getFullDescription(){
        return "Shape <#$this->id>: $this->name - $this->length x $this->width";
    }
}
