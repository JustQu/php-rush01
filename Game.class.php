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
		$this->_player1 = new Player($kwargs['login1'], $kwargs['faction1'], $kwargs['fleet_set1'], "up");
		$this->_player2 = new Player($kwargs['login2'], $kwargs['faction2'], $kwargs['fleet_set2'], "down");
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
		while (!phaseEnded())
		{
			if ($this->_player1->activeShip < $this->_player1->getFleetSize())
				executeOrders(1);
			if ($this->_player2->activeShip < $this->_player2->getFleetSize())
				executeOrders(2);
		}
	}
	
	private function	giveOrders($p)
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
	//	do stuff
	}

	private function	executeOrders()
	{
		//do stuff
	}

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
