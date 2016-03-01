<?php
	session_start();
	include 'includes/_functions.php';

	//logout($_REQUEST('logout'));
	if(isset($_POST['username']) && isset($_POST['password']))
	{
		logout($_REQUEST['logout']);
		$clientUsername = $_REQUEST['username'];
		$clientPassword = $_REQUEST['password'];
		
		$loginMessage = login($clientUsername, $clientPassword);
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
	<link href="css/admin.css" type="text/css" rel="stylesheet" />
	<?php include 'includes/_scriptIncludes.php' ?>
</head>

<body>
	<div id="wrapper">
		<?php include 'includes/_header.php' ?>
		<img class="bodyCap" src="images/bodyTop.png" height="9" width="978" alt="Body Top" />
		<div id="content">
			<h1 id="pageTitle_admin">Admin Login</h1>
			<div class="infoCont_noSideNav">
				<?php
					if(isset($loginMessage))
					{
						echo "<span id='loginError' class='error'>".$loginMessage."</span>";	
					}
				?>
				<form id="loginForm" action="admin.php" method="post">
					<table cellpadding="0">
						<tr>
							<td>
								<label class="label label-default" for="username">Username:</label>
							</td>
							<td>
								<input type="text" name="username" /><br/>
							</td>
						</tr>
						<tr>
							<td>
								<label class="label label-default" for="password">Password:</label>
							</td>
							<td>
								<input type="password" name="password" /><br/>
							</td>
						</tr>
						<tr>
							<td>
								<input class="btn btn-sm btn-default" type="submit" name="submit" value="Login" />
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
		<img class="bodyCap" src="images/bodyBottom.png" height="9" width="978" alt="Body Bottom" />
		<?php include 'includes/_footer.php' ?>
	</div>
</body>
</html>