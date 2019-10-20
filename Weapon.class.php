<?php

class weapon
{
	private $_name;
	private $_charge = 0;				/*charge point*/
	private $_Srange = array(0,0);
	private $_Mrange = array(0,0);
	private $_Lrange = array(0,0);
	private $_shootingSide = array('left'=>false, 'right'=>false, 'front'=>false, 'back'=>false);
	private $_effectZone;

	public function shoot()
	{

	}

	public function getShootingSide() {return $this->_shootingSide;}

	private function side_laser()
	{
		$this->_name = 'side_laser';
		$this->_Srange = array(1, 10);
		$this->_Mrange = array(11, 20);
		$this->_Lrange = array(21, 30);
		$this->_effectZone = 'side_laser';
	}
	private function nautical_lance()
	{
		$this->_name = 'nautical_lance';
		$this->_Srange = array(1, 30);
		$this->_Mrange = array(31, 60);
		$this->_Lrange = array(61, 90);
		$this->_effectZone = 'line_from_the_front';
	}
	public function __contruct($name)
	{
		switch ($name) {
			case 'side_laser':
				$this->side_laser();
				break;
			case 'nautical_lance':
				$this->nautical_lance();
				break;
			case 'Heavy_nautical_lance':
				$this->Heavy_nautical_lance();
		}
		$this->_name = $kwargs['name'];
		$this->_charge = $kwargs['charge'];
		$this->_Srange = $kwargs['srnage'];
		$this->_Mrange = $kwargs['mrange'];
		$this->_Lrange = $kwargs['lrange'];
		$this->_shootingSide = $kwargs['shootingside'];
	}
}
?>