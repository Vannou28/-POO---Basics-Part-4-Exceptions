<?php 
require_once ('Car.php');
require_once ('Bicycle.php');
require_once ('Truck.php');
require_once ('Vehicule.php');
require_once 'MotorWay.php';
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';




$car = new Car('green', 4, 'fuel');
//$car->setParkBrake(true);
try{
    echo $car->start();
}catch(Exception $e){
    $car->setParkBrake(false);
}finally{
    echo "Ma voiture roule comme un donut";
}
echo $car->forward();


/*
$bike= new Bicycle('blue',1);
echo $bike->forward();
var_dump($bike);



$camionVolvo = new Truck('blue', 4, 30,'fuel');
echo $camionVolvo->forward();
var_dump($camionVolvo);

echo $camionVolvo->checkLoad();

$motorWay = new MotorWay();
$motorWay->addVehicule($camionVolvo);
$motorWay->addVehicule($car);
$motorWay->addVehicule($bike);
var_dump($motorWay);

$residentialWay = new ResidentialWay();
$residentialWay->addVehicule($camionVolvo);
$residentialWay->addVehicule($car);
$residentialWay->addVehicule($bike);
var_dump($residentialWay);

$pedestrianWay = new PedestrianWay();
$pedestrianWay->addVehicule($camionVolvo);
$pedestrianWay->addVehicule($car);
$pedestrianWay->addVehicule($bike);
var_dump($pedestrianWay);
*/
?>    
