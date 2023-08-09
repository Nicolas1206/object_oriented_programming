<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php
//EXERCICE OOP 1
class beverage {
    public $color;
    public $price;
    public $temperature;
    
    /**
     * @param mixed $color
     * @param mixed $price
     * @param string $temperature
     */
    public function __construct($color, $price, $temperature = 'Cold'){
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }
    
    function getInfo(){
        return 'This beverage is ' . $this->temperature . ' and ' . $this->color . '.';
    }
}
$beverageOne = new beverage('Red', '25€', 'Hot');
$cocaCola = new beverage('black', '2€');

echo $beverageOne->color . '<br>';
echo $beverageOne->price . '<br>';
echo $beverageOne->temperature . '<br>';
echo $cocaCola->color . '<br>';
echo $cocaCola->price . '<br>';
echo $cocaCola->temperature . '<br>';
echo $cocaCola->getInfo() . '<br>';
?>

<?php 
// EXERCICE OOP 2
class beer extends beverage{
    public $name;
    public $alcoholPercentage;

    /**
     * @param mixed $name
     * @param mixed $alcoholPercentage
     * @param mixed $color
     * @param mixed $price
     */
    public function __construct($name, $alcoholPercentage, $color, $price){
        parent::__construct($color, $price);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }
    /**
     * @return [type]
     */
    function getAlcoholPercentage(){
        return 'This is the alcohol percentage: ' . $this->alcoholPercentage . '.';
    }
}
$duvel = new beer('duvel', 8.5, 'blond', 3.5);
    echo $duvel->getAlcoholPercentage() . '<br>';
    echo $duvel->getAlcoholPercentage();
    echo "<br>";
    echo $duvel->color;
    echo "<br>";
    echo $duvel->getInfo();
    $beverage = new Beverage("red", 2.0);
echo $beverage->getAlcoholPercentage();
?>