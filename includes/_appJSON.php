<?php
	mysql_connect("mysql51-019.wc2.dfw1.stabletransit.com", "414848_fsAdmin", "Fuz10nDB");
 	
	if(isset($_REQUEST['userID']))
	{
		if(mysql_ping())
		{
			$firstName = $_REQUEST['firstName'];
			$lastName = $_REQUEST['lastName'];
			$email = $_REQUEST['email'];
			$phone = $_REQUEST['phone'];
			$street = $_REQUEST['address'];
			$city = $_REQUEST['city'];
			$state = $_REQUEST['state'];
			$zip = $_REQUEST['zip'];
			$userID = $_REQUEST['userID'];
			mysql_select_db("414848_fssql1");
			
			mysql_query("
				UPDATE tblInstructors
				SET firstName='$firstName', lastName='$lastName', email='$email', phone='$phone', address='$street', city='$city', state='$state', zip='$zip'
				WHERE email = '$userID'
			");
			
			$result = mysql_query("
				SELECT *
				FROM tblInstructors
			");
			
			echo "FirstName: ".$firstName."<br>LastName: ".$lastName."<br>Email: ".$email."<br>Phone: ".$phone."<br>Street: ".$street."<br>City: ".$city."<br>State: ".$state."<br>Zip: ".$zip."<br>UserID: ".$userID;
		}
	}
	else if(isset($_REQUEST['getClasses'])){
		mysql_select_db("414848_fssql1");
		
		$result = mysql_query("
			SELECT * 
			FROM(
				SELECT subDivizionID, divizion, ltbDivizion.divizionID, subDivizion 
				FROM ltbDivizion 
				LEFT JOIN ltbSubDivizion 
				ON ltbDivizion.divizionID = ltbSubDivizion.divizionID
			) AS divizions
			LEFT JOIN tblClasses 
			ON tblClasses.divizionID = divizions.divizionID AND tblClasses.subDivizionID = divizions.subDivizionID
			WHERE classIsActive = 1

		");	
		
		$rows = array();
			
		while($r = mysql_fetch_assoc($result))
		{
			$rows['feed']['classes'][] = $r;	
		}
		
		header('Content-Type: application/json');
		
		$classes = json_encode($rows);
		
		echo json_encode($rows);
		
		return $classes;
	}
	else if(isset($_REQUEST['getDressCode'])){
		mysql_select_db("414848_fssql1");
		
		$result = mysql_query("
			SELECT * 
			FROM(
				SELECT subDivizionID, divizion, ltbDivizion.divizionID, subDivizion 
				FROM ltbDivizion
				LEFT JOIN ltbSubDivizion 
				ON ltbDivizion.divizionID = ltbSubDivizion.divizionID
				WHERE ltbDivizion.divizionID <> 999
			) AS divizions
			LEFT JOIN tblDressCode 
			ON tblDressCode.divizionID = divizions.divizionID AND tblDressCode.subDivizionID = divizions.subDivizionID

		");	
		
		$rows = array();
			
		while($r = mysql_fetch_assoc($result))
		{
			$rows['feed']['dressCodes'][] = $r;	
		}
		
		header('Content-Type: application/json');
		
		$dressCodes = json_encode($rows);
		
		echo json_encode($rows);
		
		return $dressCodes;
	}
	else if(isset($_REQUEST['getDates'])){
		mysql_select_db("414848_fssql1");
		
		$result = mysql_query("
			SELECT * 
			FROM tblDates

		");	
		
		$rows = array();
			
		while($r = mysql_fetch_assoc($result))
		{
			$rows['feed']['dates'][] = $r;	
		}
		
		header('Content-Type: application/json');
		
		$dates = json_encode($rows);
		
		echo json_encode($rows);
		
		return $dates;
	}
	else if(isset($_REQUEST['getTerms'])){
		
		if(mysql_ping())
		{
			mysql_select_db("414848_fssql1");
			
			$result = mysql_query("
				SELECT *
				FROM tblDefinitionsRead
				ORDER BY term ASC
			");
			
			$rows = array();
		
			while($r = mysql_fetch_assoc($result))
			{
				$rows['feed']['terms'][] = array_map("utf8_encode", $r);	
			}
			
			header('Content-Type: application/json');
			
			$terms = json_encode($rows);
			
			echo $terms;
			
			return $result;
		}	
	}
	else{
		
		if(mysql_ping())
		{
			mysql_select_db("414848_fssql1");
			
			$result = mysql_query("
				SELECT *
				FROM tblInstructors
			");
			
			$rows = array();
			
			while($r = mysql_fetch_assoc($result))
			{
				$rows['feed']['instructors'][] = $r;	
			}
			
			header('Content-Type: application/json');
			
			$classes = json_encode($rows);
			
			echo json_encode($rows);
			
			return $instructor;
		}
	}
			
?>