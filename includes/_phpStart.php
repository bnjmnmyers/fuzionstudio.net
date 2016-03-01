<?php
	session_start();

	if(isset($_SESSION['username']) && isset($_SESSION['password']))
	{
		
		include 'includes/_functions.php';
		logout($_REQUEST['logout']);
		
	}
?>