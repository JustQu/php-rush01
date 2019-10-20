<?php

require_once("SpaceShip.class.php");

class Player
{
	private $_name;
	private $_spaceShips = [];
	private $_fraction;
	private $_id;

	public function		__construct($name, $fleet_set, $_fraction)
	{
		$this->_name = $name;
		switch ($fleet_set)
		{
			case 1:
				createFleet("frigate", "frigate", "frigate", "onslaught", "onslaught", "onslaught", "onslaught");
				break;
			case 2:
				createFleet("ironclad", "terror", "terror", "onslaught", "onslaught");
				break;
			case 3:
				createFleet("frigate", "frigate", "terror", "terror", "onslaught", "onslaught");
				break;
		}
		$this->_fraction = $fraction;
		$this->_id = uniqid();
	}

	private function	createFleet()
	{
		$args = func_get_arg();
		foreach ($args as $ship)
			$this->_spaceShips[] = new Spaceship($ship);
	}

	public function		getShip($index) {
		return ($this->_spaceShip[$index]);
	}

}
?>