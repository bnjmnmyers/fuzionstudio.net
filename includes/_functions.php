<?php
	
	include 'includes/config.php';
	
	/********************** ADMIN ACCOUNT FUNCTIONS **********************/

	//login - Receives $username and $password
	function login($username, $password)
	{	
		$clientUsername = $username;
		
		$clientPassword = md5(SALT.$password);
		
		mysql_connect(FSSQL1_CONNECTION, FSSQL1_USER, FSSQL1_PASS);
		if(mysql_ping())
		{
			mysql_select_db(FSSQL1_HOST);
			
			$result = mysql_query("CALL verifyLogin('$clientUsername', '$clientPassword')") or die("Query fail: " . mysql_error());
				
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
	
	function logout($logout)
	{
		if($logout == 'yes')
		{
			$_SESSION['username'] = '';
			$_SESSION['password'] = '';
			$logout = 'no';
			
			header('Location: admin.php');
		}
	}

	/********************** MEMBER MANAGEMENT FUNCTIONS **********************/

	function getAllInstructors()
	{
		mysql_connect(FSSQL1_CONNECTION, FSSQL1_USER, FSSQL1_PASS);
		if(mysql_ping())
		{
			mysql_select_db(FSSQL1_HOST);
			$result = mysql_query("CALL getAllInstructors()") or die("Query fail: " . mysql_error());
			
			return $result;
			
			mysql_close();
		}
	}
	
	function getAllStudents()
	{
		mysql_connect(FSSQL2_CONNECTION, FSSQL2_USER, FSSQL2_PASS);
		if(mysql_ping())
		{
			mysql_select_db(FSSQL2_HOST);
			$result = mysql_query("CALL usp_GetStudents()") or die("Query fail: " . mysql_error());
			
			return $result;
			
			mysql_close();
		}
	}
	
	function getAllClasses($divizionID, $subDivizionID)
	{
		mysql_connect(FSSQL1_CONNECTION, FSSQL1_USER, FSSQL1_PASS);
		if(mysql_ping())
		{
			mysql_select_db(FSSQL1_HOST);
			$result = mysql_query("CALL getAllClasses('$divizionID', '$subDivizionID')") or die("Query fail: " . mysql_error());
			
			return $result;
			
			mysql_close();
		}
	}
	
	function getPayments($minDate, $maxDate)
	{
		mysql_connect(FSSQL1_CONNECTION, FSSQL1_USER, FSSQL1_PASS);
		if(mysql_ping())
		{
			mysql_select_db(FSSQL1_HOST);
			$result = mysql_query("CALL getPayments('$minDate', '$maxDate')") or die("Query fail: " . mysql_error());
			
			return $result;
			
			mysql_close();
		}
	}
?>