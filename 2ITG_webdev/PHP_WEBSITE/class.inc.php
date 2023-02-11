<?php
//Parent Class
class Car{
    public $color ="undefined";
    protected $model ="undefined";
    public $brand ="undefined";
    public static $owner ="undefined";
}
//Children class
class inherit1 extends Car{ 
    public function __construct($color,$model,$brand){
        $this->color = $color;
        $this->model = $model;
        $this->brand = $brand;
    }
    public function __destruct(){
        echo '<h1>Inheritance 1</h1>';
        echo '<p><b>Car Rental Services</b><br>Renter Name:    '.self::$owner;
        echo '<br>Color:    '.$this->color;
        echo '<br>Model:    '.$this->model;
        echo '<br>Brand:    '.$this->brand.'</p>';
        echo "<a href=\"index.php\"><button>Return</button></a>";
    }

    public static function setOwner($ownerName){
        self::$owner = $ownerName;
    }
}
class inherit2 extends Car{
    public function setProp(){
        $this->color = $_GET["cColor"];
        $this->model = $_GET["model"];
        $this->brand = $_GET["cbrand"];
        
    }
    public function display(){
        echo '<h1>Inheritance 2</h1>';
        echo '<p><b>Car Rental Services</b><br>Renter Name:    '.self::$owner;
        echo '<br>Color:    '.$this->color;
        echo '<br>Model:    '.$this->model;
        echo '<br>Brand:    '.$this->brand.'</p>';
    }

    public static function setOwner($ownerName){
        self::$owner = $ownerName;
    }
}
//Class Initializations
$c = new inherit1($_GET["cColor"],$_GET["model"],$_GET["cbrand"]);
$c::setOwner($_GET["renterName"]);

$c2 = new inherit2();
$c2->setProp();
$c2::setOwner($_GET["renterName"]);
$c2->display();