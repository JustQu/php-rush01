<?php
	include 'auth.php';
	session_start();
	if (($_POST['login'] || $_POST['login'] === "0") && ($_POST['passwd'] || $_POST['passwd'] === "0"))
	{
		if (auth($_POST['login'], $_POST['passwd']))
		{
			$_SESSION['loggued_on_user'] = $_POST['login'];
				header("Location:lobby.html");
			return;
		}
	}
	echo "ERROR\n";
?>