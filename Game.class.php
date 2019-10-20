<?php
class Game
{
    private $_id;
	private $_board;
	private $_player1;
	private $_player2;

	public function __construct()
	{
        $this->_id = md5(random_bytes(32));
        $this->_board = new Board();

	}
}
?>