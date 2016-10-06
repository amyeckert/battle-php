<?php 


require_once __DIR__.'/start/lib/ship.php';

function printShipSummary($someShip)  {
	echo $someShip->sayHello(); 
	echo  '<br/>';
	echo 'Ship Name: '.$someShip->getName();
	echo  '<br/>';
	echo $someShip->getNameAndSpecs(false);
	echo  '<br/>';
	echo $someShip->getNameAndSpecs(true);
}

// SHIP OBJECTS:
//to call method from within the class, specify which instance and use -> to target method. 

$myShip = new Ship();
$myShip->name = 'number one';
$myShip->weaponPower = 10;
$myShip->jediFactor = 34;
$myShip->strength = 50;


$otherShip = new Ship();
$otherShip->name = 'number two';
$otherShip->weaponPower = 50;
$otherShip->jediFactor = 0;
$otherShip->strength = 30;

printShipSummary($myShip);
	echo  '<hr/>';
printShipSummary($otherShip);


if($myShip->doesGivenShipHaveMoreStrength($otherShip)) {
	echo '<br/><br/>';
	echo $otherShip->name.' has more strength.';
} else {
	echo '<br/><br/>';
	echo $myShip->name.' has more strength.';
}




 ?>