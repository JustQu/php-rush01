<?php
class Game
{
    private $_id;
	private $_board;
	private $_player1;
	private $_player2;
	private $_gameStatus = -1;
	
	public function		__construct($kwargs)
	{
		$this->_id = md5(random_bytes(32));
		$this->_gameStatus = 0;
		$this->_board = new Board();
		$this->_player1 = new Player($kwargs['login'], $kwargs['faction'], $kwargs['fleet_set'], "up");
	}

	
	public function		makeTurn()
	{
		while (!phaseEnded())
		{
			if ($this->_player1->activeShip < $this->_player1->getFleetSize())
				giveOrders(1);
			if ($this->_player2->activeShip < $this->_player2->getFleetSize())
				giveOrders(2);
		}
		// while (!phaseEnded())
		// {
		// 	if ($this->_player1->activeShip < $this->_player1->getFleetSize())
		// 		executeOrders(1);
		// 	if ($this->_player2->activeShip < $this->_player2->getFleetSize())
		// 		executeOrders(2);
		// }
	}
	
	private function	giveOrders($p, $order)
	{
		if ($p == 1)
		{
			$ship = $this->_player1->getShip($this->_p1ActiveShip);
			++$this->_player1->activeShip;
		}
		else
		{
			$ship = $this->_player2->getShip($this->_p2ActiveShip);
			++$this->_player1->activeShip;
		}
		if ($order == "shoot")
			$ship->shoot();
		else if ($order == "moveXdown")
			$ship->setX($ship->getX() + 1);
		else if ($order == "moveYdown")
			$ship->setY($ship->getY() + 1);
		else if ($order == "moveXup")
			$ship->setY($ship->getY() - 1);
		else if ($order == "moveYup")
			$ship->setY($ship->getY() - 1);
		else if ($order == "repair")
			$ship->repair();
	}

	// private function	executeOrders()
	// {
	// 	//do stuff
	// }

	private function	phaseEnded()
	{
		if ($this->_player1->activeShip < $this->_player1->getFleetSize()
			|| $this->_player2->activeShip < $this->_player2->getFleetSize())
			return (FALSE);
		$this->_player1->activeShip = 0;
		$this->_player2->activeShip = 0;
		return (TRUE);
	}

	public function		isGameEnded()
	{
		if ($this->_player1->getFleetSize()
			&& $this->_player2->getFleetSize())
			return (FALSE);
		return (TRUE);
	}
}
?>
