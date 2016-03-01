<?php
	include 'config.php';
	
	mysql_connect(FSSQL1_CONNECTION, FSSQL1_USER, FSSQL1_PASS);
	if(mysql_ping())
	{
		if(isset($_REQUEST['key']) && $_REQUEST['key'] == 'processFSPayment')
		{
			$amount = $_REQUEST['amount'];
			$confirmationNum = $_REQUEST['confirmationNum'];
			$date = $_REQUEST['date'];
			$email = $_REQUEST['email'];
			$name = $_REQUEST['name'];
			
			if($amount != '')
			{
				mysql_select_db(FSSQL1_HOST);
				
				$result = mysql_query("CALL usp_InsPayment('$amount', '$confirmationNum', '$date', '$email', '$name')") or die("Query fail: " . mysql_error());
				
				echo $result;
				
				$rows = mysql_affected_rows();
				echo $rows;
				if($rows > 0)
				{
								
					if($contactMethod == '')
					{
						$contactMethod = 'n/a';	
					}
					
					$to = ADMIN_EMAIL;
					$subject = "Tuition Payment - ".$amount;
					$message = "Date: ".$date.
					"\r\nName: ".$name.
					"\r\nConfirmation Number: ".$confirmationNum.
					"\r\nPayment Amount: $".$amount.
					"\r\nEmail: ".$email;
					
					$header = "From: ".$name.' '.'<'.$email.'>';
					
					mail($to,$subject,$message,$header);
											
					$processMessage = "Success";
					return $processMessage;
				}
				else{
					$processMessage = "There was a problem inserting a payment.";
					echo $processMessage;
				}
			}
		}
	}
	else{
		echo "There was a problem connecting to the database.";
	}
?>