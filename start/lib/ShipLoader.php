<?php

class ShipLoader {

    public function getShips() {
        $shipsData = $this->queryForShips();
        
        $ships = array(); //creates array to contain the ships. 

        foreach ($shipsData as $shipData) {
            $ship = new Ship($shipData['name']); //creates new Ship object
            $ship->setId($shipData['id']);
            $ship->setWeaponPower($shipData['weapon_power']);
            $ship->setJediFactor($shipData['jedi_factor']);
            $ship->setStrength($shipData['strength']);
       
            $ships[] = $ship;
            // $this->createshipFromData($shipData); //adds ship to ship array.

            // var_dump($shipsArray);die;
        }
        return $ships; //returns the array of ship OBJECTS create
    }

    public function findOneByID($id) {
        $pdo = new PDO('mysql:host=localhost;dbname=oo_battle', 'root'); //from this db
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $statement = $pdo->prepare('SELECT * FROM ship WHERE id = :id'); //ship is the name of the table in db
        $statement->execute(array('id' => $id));
        $shipArray = $statement->fetch(PDO::FETCH_ASSOC); //FETCH_ASSOC is a Class constant.

        var_dump($shipArray);die;
        

    }

    private function queryForShips() {
         //to make a query:
        $pdo = new PDO('mysql:host=localhost;dbname=oo_battle', 'root'); //from this db
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $statement = $pdo->prepare('SELECT * FROM ship'); //ship is the name of the table in db
        $statement->execute();
        $shipsArray = $statement->fetchAll(PDO::FETCH_ASSOC); //FETCH_ASSOC is a Class constant.

        return $shipsArray;
        // print_r($shipsArray);
    }
}
?>