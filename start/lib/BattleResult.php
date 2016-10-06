<?php


class BattleResult 
{
	private $usedJediPowers;

	private $winningShip;

	private $losingShip;

								//type hinting- put type of thing to be returned in the paramaters.
	public function __construct($usedJediPowers, Ship $winningShip, Ship $losingShip) 
	{
			$this->usedJediPowers = $usedJediPowers; //boolean
			$this->winningShip = $winningShip; //object
			$this->losingShip = $losingShip; //object

	}

	public function wereJediPowersUsed() {
		return $this->usedJediPowers;
	}
	public function getWinningShip() {
		return $this->winningShip;
	}
	public function getLosingShip() {
		return $this->losingShip;
	}	
}

?>