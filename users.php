<?php
	session_start();

	if(isset($_SESSION['username']) && isset($_SESSION['password']))
	{
		
		include 'includes/_functions.php';
		$result = getUserData();
	
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
	<meta name="description" content="Fuzion Studio About Page - Gives and over view of the vizion and misson of Fuzion." />
	<meta name="keywords" content="dance studio, dance class, dance classes, jefferson city, jefferson city dance studio, dance studio jefferson city, dance class in jefferson city tn, jefferson city tn, jefferson city tennessee, fuzion studio, FS, piloxing, jefferson city, piloxing, fitness classes, fitness, fitness classes in jefferson city tn" />
	<title>Fuzion Studio | Admin Login</title>
	<link rel="shortcut icon" href="http://www.fuzionstudio.net/favicon.ico" />
	<link href="css/global.css" type="text/css" rel="stylesheet" />
	<link href="css/adminPanel.css" type="text/css" rel="stylesheet" />
	<?php include 'includes/_scriptIncludes.php' ?>
</head>

<body>
	<div id="wrapper">
		<?php include 'includes/_header.php' ?>
		<img class="bodyCap" src="images/bodyTop.png" height="9" width="978" alt="Body Top" />
		<div id="content">
			<h1 id="pageTitle">Admin Panel</h1>
			<div id="salutation">
				<a href="?logout=yes" id="logoutBtn">[logout]</a>
				<h3 class="floatL">Welcome, <?php echo $_SESSION['firstname']; ?>!</h3>
			</div>
			<ul id="subNav">
				<li><span>Select a category:</span></li>
				<li id="whoWeAre" class="subNavLink">View Users</li>
				<li id="missionStatement" class="subNavLink">Edit Users</li>
				<li id="vizionStatement" class="subNavLink">Update Users</li>
				<li id="theStaff" class="subNavLink">Delete Users</li>
			</ul>
			<div class="infoCont">
				<?php 
					if(isset($result))
					{
						echo "<table>
									<tr>
										<td>First Name</td>
										<td>Last Name</td>
										<td>Address</td>
									</tr>";
									while($userData = mysql_fetch_array($result))
									{
										$address = $userData['address'];
										$city = $userData['city'];
										$email = $userData['email'];
										$memberFirstname = $userData['memberFirstname'];
										$memberID = $userData['memberID'];
										$memberLastname = $userData['memberLastname'];
										$memberType = $userData['memberType'];
										$parentFirstname = $userData['parentFirstName'];
										$parentLastname = $userData['parentLastname'];
										$phoneNumber = $userData['phoneNumber'];
										$postalCode = $userData['postalCode'];
										$phone = $userData['phone'];
										$state = $userData['state'];
										
										echo
											"<tr>
												<td>".$memberFirstname."</td>
												<td>".$memberLastname."</td>
												<td>".$address."<br/>".$city.", ".$state." ".$postalCode."</td>
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