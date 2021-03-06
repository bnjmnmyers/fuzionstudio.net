<?php
	session_start();
	include 'includes/_functions.php';
	
	if(isset($_SESSION['username']) && strlen($_SESSION['username']) > 0 && isset($_SESSION['password']))
	{
		logout($_REQUEST['logout']);
	}
	else{
		header("Location: admin.php");
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="Fuzion Studio About Page - Gives and over view of the vizion and misson of Fuzion." />
	<meta name="keywords" content="dance studio, dance class, dance classes, jefferson city, jefferson city dance studio, dance studio jefferson city, dance class in jefferson city tn, jefferson city tn, jefferson city tennessee, fuzion studio, FS, piloxing, jefferson city, piloxing, fitness classes, fitness, fitness classes in jefferson city tn" />
	<title>Fuzion Studio | Admin Panel</title>
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
			<h1 id="pageTitle_admin">Admin Panel</h1>
			<div class="infoCont_noSideNav">
				<div id="memberManagement" class="adminCategoryCont">
					<a href="members.php">
						<img class="managementIcon" src="images/admin/membersIcon.png" height="55" width="50" alt="Member Management Icon" title="Manage Members" />
						<p class="adminCategory">Manage Members</p>
					</a>
				</div>
				<div id="announcementManagement" class="adminCategoryCont">
					<a href="announcements.php">
						<img class="managementIcon" src="images/admin/announcementsIcon.png" height="55" width="50" alt="Announcement Management Icon" title="Manage Announcements" />
						<p class="adminCategory">Manage Announcements</p>
					</a>
				</div>
			</div>
		</div>
		<img class="bodyCap" src="images/bodyBottom.png" height="9" width="978" alt="Body Bottom" />
		<?php include 'includes/_footer.php' ?>
	</div>
</body>
</html>