<?php
	session_start();
	
	include 'includes/_functions.php';
	$minDate = '2014-01-01';
	$maxDate = '2044-01-01';
	
	if(isset($_SESSION['username']) && strlen($_SESSION['username']) > 0 && isset($_SESSION['password']))
	{
		logout($_REQUEST['logout']);
		if(isset($minDate) && isset($maxDate))
		{	
			$payments = getPayments($minDate, $maxDate);
		}
	}
	else
	{
		header('Location: admin.php');	
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="Fuzion Studio Payment />
	<title>Fuzion Studio | Previous Payments Page</title>
	<link rel="shortcut icon" href="http://www.fuzionstudio.net/favicon.ico" />
	<link href="css/global.css" type="text/css" rel="stylesheet" />
	<link href="css/payments.css" type="text/css" rel="stylesheet" />
	<?php include 'includes/_scriptIncludes.php' ?>
</head>

<body>
	<div id="wrapper">
		<?php include 'includes/_header.php' ?>
		<img class="bodyCap" src="images/bodyTop.png" height="9" width="978" alt="Body Top" />
		<div id="content">
			<h1 id="pageTitle_admin">Payment Review</h1>
			<ul id="subNav">
				<li class="subNavLink">View Members</li>
				<li class="subNavLink">Register Members</li>
				<li class="subNavLink">Edit Members</li>
				<li class="subNavLink">Delete Members</li>
			</ul>
			<div class="infoCont_noSideNav">
				<?php
					if(isset($payments))
					{
						echo "<table>
									<tr>
										<td class='columnLabel'>Name</td>
										<td class='columnLabel'>Email</td>
										<td class='columnLabel'>Amount</td>
										<td class='columnLabel'>Date</td>
										<td class='columnLabel'>Confirmation</td>
									</tr>";
									while($payment = mysql_fetch_array($payments))
									{
										$amount = $payment['amount'];
										$confirmationNum = $payment['confirmationNum'];
										$date = $payment['date'];
										$email = $payment['email'];
										$name = $payment['name'];
										
										echo
											"<tr class='paymentRow'>
												<td>".$name."</td>
												<td>".$email."</td>
												<td>$".$amount.".00</td>
												<td>".date("m-d-Y", strtotime($date))."</td>
												<td>".$confirmationNum."</td>
											</tr>";
									}	
						
						echo "</table>";
					}
				?>
			</div>
		</div>
		<img class="bodyCap" src="images/bodyBottom.png" height="9" width="978" alt="Body Bottom" />
		<?php include 'includes/_footer.php' ?>
	</div>
</body>
</html>