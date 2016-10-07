<?php

class Ship {
	//properties
	private $id;
	private $name = '';
	private $weaponPower = 0;
	private $jediFactor = 0;
	private $strength= 0;
	private $underRepair;
	//methods
	public function __construct($name){
		$this->name = $name;
		$this->underRepair = mt_rand(1, 100) < 30;
	}
	public function isFunctional() {
		return !$this->underRepair;
	}

	public function getName() {
		return $this->name; // variable $this means when you call variable in an instance it returns the property of the instance, in that scope.
	}
	public function getNameAndSpecs($useShortFormat = false) {
		if($useShortFormat) {
			//%s is placeholder, The sprintf() function writes a formatted string to a variable.At the first % sign, arg1 is inserted, at the second % sign, arg2 is inserted, etc. http://www.w3schools.com/php/showphp.asp?filename=demo_func_string_sprintf4
			return sprintf(
				// placeholders:
				'%s: %s/%s/%s', 
				// arguments that map to above placeholders:
				$this->name, 
				$this->weaponPower, 
				$this->jediFactor, 
				$this->strength 
				); 

		} else {
			return sprintf(
			// placeholders:
			'%s: w:%s, j:%s, s:%s', 
			// arguments that map to above placeholders:
			$this->name, 
			$this->weaponPower, 
			$this->jediFactor, 
			$this->strength 

			); 
		}
	}
	public function doesGivenShipHaveMoreStrength($givenShip) {
		return $givenShip->strength > $this->strength;
	}

	//set public functions to access private properties:
	public function setName($name) {
		$this->name = $name;
	}
	public function setId($id) {
		$this->id = $id;
	}
	public function setWeaponPower($weaponPower) {
		$this->weaponPower = $weaponPower;	
	}
	public function setJediFactor($jediFactor) {
		$this->jediFactor = $jediFactor;	
	}
	public function setStrength($strength) {
		if(!is_numeric($strength)) {
			throw new Exception('Invalid strength passed '. $strength); //exceptions stop flow and show error. 
		}
		$this->strength = $strength;
	}

	//use a get function to get the value of the set properties.
	public function getId() {
		return 5;
	}
	public function getWeaponPower() {
		return $this->weaponPower;
	}
	public function getJediFactor() {
		return $this->jediFactor;
	}
	public function getStrength() {
		return $this->strength;
	}
	
} 




?>