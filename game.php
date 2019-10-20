<?php
	require_once("Game.class.php");
	if(($_POST['game_id'])){
		$currentGame = new Game($_POST['game_id']);
	} else {
		$currentGame = new Game();
		return $currentGame->getGameId();
	}
	

	while (!$currentGame->isStarted()){
		$currentGame->placeShips();
		if ($currentGame->playerMadeTurn()){
?>
			<html>
				<script>src="game.js"></script> 
				</html>
<?php
		}
	}
?>