<?php
	
	include 'config.php';

	if($_REQUEST['method'] == 'getClassesByAge' && isset($_REQUEST['age']))
	{
		$age = $_REQUEST['age'];
		
		mysql_connect(FSSQL2_CONNECTION, FSSQL2_USER, FSSQL2_PASS);
		
		if(mysql_ping())
		{
			mysql_select_db(FSSQL2_HOST);
			$result = mysql_query("CALL usp_getClassesByAge('$age')") or die("Query fail: ". mysql_error());	
			
			$rows = array();
			
			while($r = mysql_fetch_assoc($result))
			{
				$rows['feed']['classes'][] = $r;	
			}
			
			header('Content-Type: application/json');
			header("content-type: Access-Control-Allow-Origin: *");
			header("content-type: Access-Control-Allow-Methods: GET");
			
			$classes = json_encode($rows);
			
			echo $classes;
			
			return $classes;
			
			mysql_close();
		}
	}

?>