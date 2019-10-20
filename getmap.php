<?php
	session_start();
	$board = unserialize(file_get_contents("dd"));
	file_put_contents("dd", $board);
	echo  $board->get_board();
?>