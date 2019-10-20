<html>
	<table>
	<?php
		for ($i = 0; $i < 100; $i++) {
	?>
			<tr>
	<?php
			for ($j = 0; $j <150; $j++) {
	?>
				<td></td>
	<?php
			}
	?>
			</tr>
	<?php
		}
	?>
	</table>
</html>
<?php
	// require_once("Game.class.php");
	// if(($_POST['game_id'])){
	// 	$currentGame = new Game($_POST['game_id']);
	// } else {
	// 	$currentGame = new Game();
	// 	return $currentGame->getGameId();
	// }
	

	// while (!$currentGame->isStarted()){
	// 	$currentGame->placeShips();
	// 	if ($currentGame->playerMadeTurn()){
?>
			<!-- <script>src="game.js"></script>  -->
<?php
	// 	}
	// }
?>