<?php 
require_once ('Car.php');
require_once ('Bicycle.php');
require_once ('Truck.php');
require_once ('Vehicule.php');
require_once 'MotorWay.php';
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';


$bike= new Bicycle('blue',1);

// Moving bike
echo $bike->forward();
var_dump($bike);

$car = new Car('green', 4, 'fuel');
echo $car->forward();
var_dump($car);


$camionVolvo = new Truck('blue', 4, 30,'fuel');
echo $camionVolvo->forward();
var_dump($camionVolvo);

echo $camionVolvo->checkLoad();

$motorWay = new MotorWay();
$motorWay->addVehicle($truck);
$motorWay->addVehicle($car);
$motorWay->addVehicle($bike);
var_dump($motorWay);

$residentialWay = new ResidentialWay();
$residentialWay->addVehicle($truck);
$residentialWay->addVehicle($car);
$residentialWay->addVehicle($bike);
var_dump($residentialWay);

$pedestrianWay = new PedestrianWay();
$pedestrianWay->addVehicle($truck);
$pedestrianWay->addVehicle($car);
$pedestrianWay->addVehicle($bike);
var_dump($pedestrianWay);

?>    



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>
<body>

   
</body>
</html>