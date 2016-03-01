<?php
	session_start();

	if(isset($_SESSION['username']) && isset($_SESSION['password']))
	{
		
		include 'includes/_functions.php';
		logout($_REQUEST['logout']);
		
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="Welcome to Fuzion Studio of the Arts Home Page. Find out all that you need to know about our dance studio." />
	<meta name="keywords" content="dance studio, dance class, dance classes, jefferson city, jefferson city dance studio, dance studio jefferson city, dance class in jefferson city tn, jefferson city tn, jefferson city tennessee, fuzion studio, FSA, fuzion studio of the arts, piloxing, jefferson city, piloxing, fitness classes, fitness, fitness classes in jefferson city tn" />
	<title>Fuzion Studio | Jefferson City, TN Dance & Fitness Studio - Home Page</title>
	<link href="css/global.css" type="text/css" rel="stylesheet" />
	<link href="css/index.css" type="text/css" rel="stylesheet" />
	<?php include 'includes/_scriptIncludes.php' ?>
</head>

<body>
	<div id="wrapper">
		<?php include 'includes/_header.php' ?>
		<img class="bodyCap" src="images/bodyTop.png" height="9" width="978" alt="Body Top" />
		<div id="content">
			<div id="vt360">
				<iframe width="929" height="314" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=Fuzion+Studio&amp;hl=en&amp;sll=36.120033,-83.503951&amp;layer=c&amp;cid=9902783228588765582&amp;panoid=9NHOk2-iHNzEF0pZ8Ykxpw&amp;cbp=13,30.8,,0,0&amp;gl=us&amp;hq=Fuzion+Studio&amp;t=m&amp;cbll=36.120329,-83.504435&amp;ie=UTF8&amp;hnear=&amp;ll=36.119512,-83.503304&amp;spn=0.007245,0.016512&amp;source=embed&amp;output=svembed">
				</iframe>
			</div>
			<div id="featuredLinks">
				<div id="pod1" class="pod">
					<a href="about.php">
						<img src="images/whyFSA.jpg" height="167" width="295" alt="Fuzion Logo on Wall" title="Why FSA" />
					</a>
					<p><span class="podTitle">Why Fuzion?</span>Learn what sets us apart from other area dance studios.</p>
				</div>
				<div id="pod2" class="pod">
					<a href="downloads.php">
						<img src="images/infoPacket.jpg" height="167" width="295" alt="Fuzion Studio Information Packet" title="Student Info Packet" />
					</a>
					<p><span class="podTitle">Download Student Info Packet</span>Find out all that you need to know about joining Fuzion Studio.</p>
				</div>
				<div id="pod3" class="pod">
					<a href="http://www.ziondance.com" target="_blank">
						<img src="images/zion.jpg" height="167" width="295" alt="Zion Dance Company Logo" title="Visit Zion Dance Company's Official Site" />
					</a>
					<p><span class="podTitle">Zion Dance Company</span>In January of 2013 Fuzion Studio birthed Zion Dance Company. Visit www.ziondance.com to learn more about this new venture.</p>
				</div>
			</div>
		</div>
		<img class="bodyCap" src="images/bodyBottom.png" height="9" width="978" alt="Body Bottom" />
		<?php include 'includes/_footer.php' ?>
	</div>
</body>
</html>