<?php

require_once("Ship.class.php");

class Player
{
	private $_name;
	private $_fleet = [];
	private $_fraction;
	private $_id;
	public	$activeShip;

	public function		__construct($name, $fleet_set, $_fraction, $position)
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
				createFleet("destroyer", "destroyer", "terror", "terror", "onslaught", "onslaught");
				break;
		}

		$this->placeFleet($position);
		$this->_fraction = $fraction;
		$this->_id = uniqid();
		$this->activeShip = 0;
	}

	private function	createFleet()
	{
		$args = func_get_arg();
		foreach ($args as $ship)
			$this->_fleet[] = new Ship($ship);
	}

	private function	placeFleet($position)
	{
		if ($position == 'up')
			$x = $y = 0;
		else
		{
			$x = 148;
			$y = 90;
		}
		foreach ($this->_fleet as $ship)
		{
			$ship->setPosition($x, $y);
			if ($position == "up")
				$x += $ship->getSizeX() + 1;
			else
				$x -= $ship->getSizeX() + 1;
		}
	}

	public function		getFleetSize() {
		return (count($this->_fleet));
	}

	public function		getShip($index) {
		return ($this->_spaceShip[$index]);
	}

	public function		getNextShip() {
		return ($this->_spaceShip[$this->activeShip++]);
	}

	public function		destroyShip($index) {
		array_splice($this->_spaceShips, $index, 1);
	}

}
?>
