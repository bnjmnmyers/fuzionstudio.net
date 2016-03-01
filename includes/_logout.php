<?php

	if(isset($_REQUEST['logout']) && $_REQUEST['logout'] == yes)
	{
		$_SESSION['username'] = '';
		$_SESSION['password'] = '';
		
		header('Location: admin.php');	
	}

?>