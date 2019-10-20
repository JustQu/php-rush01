<?php
	session_start();
    if (isset($_GET["active_game"]))
?>

<html>
	<head>
		<style>
			#myCanvas
			{
				width: 800px;
				height: 800px;
				margin: 10 10;
			}
		</style>
	</head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="game.js"></script>
	<link href="styles.css" rel="stylesheet" type="text/css"/>	
	<title>Game</title>
	<link rel="icon" type="image/gif" href="https://cdn2.iconfinder.com/data/icons/circle-icons-1/64/rocket-512.png" />
	<body>
		<div>
		<canvas id="myCanvas" width="800\" height="800"></canvas>
		</div>
	</body>
</html>
<?php
	require_once("GameField.class.php");
	if (!isset($_GET['game_id'])){
		//$_SESSION['game'] = new Game(array('login' => $_SESSION['logged_on_user']));
		$_SESSION['map'] = new GameField();
	}
	// require_once("Game.class.php");
	// if(($_POST['game_id'])){
	// 	$currentGame = new Game($_POST['game_id']);
	// } else {
	// 	$currentGame = new Game();
	// 	return $currentGame->getGameId();
	// }
	
	//	<div id="m" style="width:500px;height:500px;margin:auto;margin-top:10px;"/> 
	//
	// while (!$currentGame->isStarted()){
	// 	$currentGame->placeShips();
	// 	if ($currentGame->playerMadeTurn()){
?>
