<?php

	//LOGIN - Receives $username and $password
	function login($username, $password)
	{
		$clientUsername = $username;
		$clientPassword = $password;
		
		mysql_connect("mysql51-019.wc2.dfw1.stabletransit.com", "414848_fsAdmin", "Hbj66973");
		if(mysql_ping())
		{
			mysql_select_db("414848_fssql1");
			
			$result = mysql_query("
				SELECT *
				FROM tblUserInformation
				WHERE username = '$clientUsername' and password = '$clientPassword'
			");
			
			$row = mysql_fetch_array($result);
			$storedPassword = $row['password'];
			
			if(mysql_num_rows($result) > 0 && ($clientPassword === $storedPassword))
			{
				$_SESSION['username'] = $clientUsername;
				$_SESSION['password'] = $clientPassword;
				$_SESSION['firstname'] = $row['firstname'];	
				
				header('Location: adminPanel.php');
			}
			else
			{
				$loginMessage = "Incorrect Username or Password.";	
				
				return $loginMessage;
			}
			
			mysql_close();
		}
		else
		{
			header('Location: index.php');	
		}	
	}
	
	//LOGOUT - Receives url variables $logout
	function logout($logout)
	{
		if($logout == 'yes')
		{
			$_SESSION['username'] = '';
			$_SESSION['password'] = '';
			
			header('Location: admin.php');	
		}
	}

?>