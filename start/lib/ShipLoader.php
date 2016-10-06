<?php

class ShipLoader {

    public function getShips() {
     
        $ships = array(); //creates array to contain the ships. 

        $ship = new Ship('Borg'); 
        $ship->setWeaponPower(2); //defined in Ship Class 
        $ship->setJediFactor(2);
        $ship->setStrength(2);
        $ships['starfighter'] = $ship; //adds ship to ships array, uses key 'starfighter'.

        $ship2 = new Ship('Hot Air Baloon');
        $ship2->setWeaponPower(3);
        $ship2->setJediFactor(5);
        $ship2->setStrength(18);
        $ships['Sillyship'] = $ship2;

        $ship3 = new Ship('Purple Nurple');     
        $ship3->setWeaponPower(5975);
        $ship3->setJediFactor(9);
        $ship3->setStrength(7000);

        $ships['purplenurple'] = $ship3;
        $ship4 = new Ship('Exploding Yoda');
        $ship4->setWeaponPower(3);
        $ship4->setJediFactor(90000);
        $ship4->setStrength(600);

        $ships['Exploding Yodas'] =$ship4;

        return $ships; //returns the array of ship OBJECTS created.

    }
}
?>