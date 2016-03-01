<?php
	//connect to database
	$connection = mysqli_connect("mysql51-106.wc2.dfw1.stabletransit.com", "414848_fsAdmin2", "Fuz10nDB", "414848_fssql2");

	//run the store proc
  	$result = mysqli_query($connection, 
    "CALL usp_GetStudents") or die("Query fail: " . mysqli_error());

  	//loop the result set
	while ($row = mysqli_fetch_array($result)){ 
		echo "<div style='border: 1px solid black; margin-bottom:4px; width: 600px; height: 70px; padding: 10px;'>";  
    	echo $row['firstName'];
		echo " ";
		echo $row['lastName']."<br/>";
		echo "<b>Gender: </b>".$row['gender']."<br/>";
		echo $row['address']."<br/>";
		echo $row['city']." ".$row['state'].", ".$row['zip'];
		echo "</div>";
  	}
	
?>