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
	<meta name="description" content="Fuzion Studio Downloads Page - Download desktop wallpaper for your computer. Or download our student information packet." />
	<meta name="keywords" content="dance studio, dance class, dance classes, jefferson city, jefferson city dance studio, dance studio jefferson city, dance class in jefferson city tn, jefferson city tn, jefferson city tennessee, fuzion studio, FS, piloxing, jefferson city, piloxing" />
	<title>Fuzion Studio | Studio Downloads</title>
	<link href="css/global.css" type="text/css" rel="stylesheet" />
	<link href="css/downloads.css" type="text/css" rel="stylesheet" />
	<?php include 'includes/_scriptIncludes.php' ?>
</head>

<body>
	<div id="wrapper">
		<?php include 'includes/_header.php' ?>
		<img class="bodyCap" src="images/bodyTop.png" height="9" width="978" alt="Body Top" />
		<div id="content">
			<h1 id="pageTitle">Downloads</h1>
			<div id="banner">
				<img src="images/about/banner.jpg" height="172" width="929" alt="Image of Owners and Sign" title="Fuzion Studio Owners and Their Sign" />
			</div>
			<ul id="subNav">
				<li><span>Select a category:</span></li>
				<li id="infoPacket" class="subNavLink">Info Packet</li>
				<li id="wallpapers" class="subNavLink">Wallpapers</li>
			</ul>
			<div id="infoPacketCont" class="infoCont">
				<h2 class="sectionTitle">Fuzion Info Packet</h2>
				<div class="copy">
					<a id="infoPacket" href="downloads/FuzionPacket.pdf?ts=08142014-1604">
						<img src="images/downloads/infoPacket.jpg" height="185" width="224" alt="Student Information Packet" />
						<h3>Download Student Info Packet</h3>
					</a>
				</div>
			</div>
			<div id="wallpapersCont" class="infoCont">
				<h2 class="sectionTitle">Wallpaper</h2>
				<div class="copy">
					<p id="instructions"><b>Download Instructions:</b> If the file does not download automatically, click the desired image size > right click the image and select "Save image as..."</p>
					<div id="wallpapersOne" class="wallpaper">
						<img src="images/downloads/wallpaper1.jpg" height="171" width="224" alt="Wallpaper 1" />
						<p class="resolutionCont"><a href="/downloads/wallpapers/1680x1050/FSABG1.jpg" target="_blank" class="resolution">1680x1050</a> - <a href="/downloads/wallpapers/1440x900/FSABG1.jpg" target="_blank" class="resolution">1440x900</a></p>
						<p class="resolutionCont"><a href="/downloads/wallpapers/1280x1024/FSABG1.jpg" target="_blank" class="resolution">1280x1024</a> - <a href="/downloads/wallpapers/1280x800/FSABG1.jpg" target="_blank" class="resolution">1280x800</a></p>
					</div>
					<div id="wallpaperTwo" class="wallpaper">
						<img src="images/downloads/wallpaper2.jpg" height="171" width="224" alt="Wallpaper 2" />
						<p class="resolutionCont"><a href="/downloads/wallpapers/1680x1050/FSABG2.jpg" target="_blank" class="resolution">1680x1050</a> - <a href="/downloads/wallpapers/1440x900/FSABG2.jpg" target="_blank" class="resolution">1440x900</a></p>
						<p class="resolutionCont"><a href="/downloads/wallpapers/1280x1024/FSABG2.jpg" target="_blank" class="resolution">1280x1024</a> - <a href="/downloads/wallpapers/1280x800/FSABG2.jpg" target="_blank" class="resolution">1280x800</a></p>
					</div>
					<div id="wallpaperThree" class="wallpaper">
						<img src="images/downloads/wallpaper3.jpg" height="171" width="224" alt="Wallpaper 3" />
						<p class="resolutionCont"><a href="/downloads/wallpapers/1680x1050/FSABG3.jpg" target="_blank" class="resolution">1680x1050</a> - <a href="/downloads/wallpapers/1440x900/FSABG3.jpg" target="_blank" class="resolution">1440x900</a></p>
						<p class="resolutionCont"><a href="/downloads/wallpapers/1280x1024/FSABG3.jpg" target="_blank" class="resolution">1280x1024</a> - <a href="/downloads/wallpapers/1280x800/FSABG3.jpg" target="_blank" class="resolution">1280x800</a></p>
					</div>
				</div>
			</div>
		</div>
		<img class="bodyCap" src="images/bodyBottom.png" height="9" width="978" alt="Body Bottom" />
		<?php include 'includes/_footer.php' ?>
	</div>
</body>
</html>