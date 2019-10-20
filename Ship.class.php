<?php

class Ship
{
	private $_name; 		/* name of the ship */
	private $_sizeX;		/* width of the ship */
	private $_sizeY;		/* height of the ship */
	private $_sprite;		/* representation of the ship on the grid */
	private $_hull;			/* life points of the ship */
	private $_pp;	/* The engine power gives the ship a number of points that the
							players will be able to attribute to different actions when activating a ship
							depending on situations. Those will be "power points" shortened with PP. */
	private $_speed;		/* Maximum number of cells that the ship can move each turn */
	private $_handling;		/* Number of cells that a ship that moved on the prior turn needs to
								travel straight this turn if he wants to stay stationery for the next one */
	private $_shield;		/*Number of damage points that a ship can endure before losing his hull points */
	private $_weapon;		/* List of weapons that ship owns, generally one or two, sometimes more for the really big ships */
	private $_stageinnery;

	private $_posX;
	private $_posY;
	private $_direction;

	public function		__construct($type, $faction)
	{
		$ship_creators = array("frigate" => "createFrigate",
								"onslaught" => "createOnslaught",
								"ironclad" => "createIronclad",
								"terror" => "createTerror",
								"destroyer" => "createDestroyer");
		$this->_type = $type;
		call_user_func($ship_creators[$type]);
	}

	private function	createFrigate()
	{
		$this->_sizeX = 1;
		$this->_sizeY = 4;
		$this->_hull = 5;
		$this->_pp = 10;
		$this->_speed = 15;
		$this->_handling = 4;
		$this->_shield = 0;
		$this->_weapon = new Weapon("nautical_lance");
	}

	private function	createOnslaught()
	{
		$this->_sizeX = 1;
		$this->_sizeY = 2;
		$this->_hull = 4;
		$this->_pp = 10;
		$this->_speed = 19;
		$this->_handling = 3;
		$this->_shield = 0;
		$this->_weapon = new Weapon("side_laser");
	}

	private function	createDestroyer()
	{
		$this->_sizeX = 1;
		$this->_sizeY = 3;
		$this->_hull = 4;
		$this->_pp = 10;
		$this->_speed = 18;
		$this->_handling = 3;
		$this->_shield = 0;
		$this->_weapon = new Weapon("side_laser");
	}

	private function	createIronclad()
	{
		$this->_sizeX = 2;
		$this->_sizeY = 7;
		$this->_hull = 8;
		$this->_pp = 12;
		$this->_speed = 10;
		$this->_handling = 3;
		$this->_shield = 2;
		$this->_weapon = new Weapon("heavy_nautical_lance");
	}

	private function	createTerror()
	{
		$this->_sizeX = 1;
		$this->_sizeY = 5;
		$this->_hull = 6;
		$this->_pp = 10;
		$this->_speed = 12;
		$this->_handling = 4;
		$this->_shield = 0;
		$this->_weapon = new Weapon("macro_canon");
	}

	public function getName() { return $this->_name; }
	public function getSizeX() { return $this->_sizeX; }
	public function getSizeY() { return $this->_sizeY; }
	public function getSprite() { return $this->_sprite; }
	public function getHoolPoints() { return $this->_hull; }
	public function getEnginePower() { return $this->_pp; }
	public function getSpeed() { return $this->_speed; }
	public function getHandling() { return $this->_handling; }
	public function getShield() { return $this->_shield; }
	public function getWeapons() { return $this->_weapons; }
}
?>