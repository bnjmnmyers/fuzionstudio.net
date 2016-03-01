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
	<meta name="description" content="Fuzion Studio Zummer Camp Page - Gives an over view of the two arts camps offered during the summer semsters." />
	<meta name="keywords" content="summer, summer dance camp, dance camp, camp, dance studio, dance class, dance classes, jefferson city, jefferson city dance studio, dance studio jefferson city, dance class in jefferson city tn, jefferson city tn, jefferson city tennessee, fuzion studio, FS, piloxing, jefferson city, piloxing, fitness classes, fitness, fitness classes in jefferson city tn" />
	<title>Fuzion Studio of the Arts | About the dance studio vision and mission statement</title>
	<link href="css/global.css" type="text/css" rel="stylesheet" />
	<link href="css/zummer.css" type="text/css" rel="stylesheet" />
	<?php include 'includes/_scriptIncludes.php' ?>
</head>

<body>
	<div id="wrapper">
		<?php include 'includes/_header.php' ?>
		<img class="bodyCap" src="images/bodyTop.png" height="9" width="978" alt="Body Top" />
		<div id="content">
			<h1 id="pageTitle">Zummer Camps</h1>
			<div id="banner">
				<img src="images/about/banner.jpg" height="172" width="929" alt="Image of Owners and Sign" title="Fuzion Studio Owners and Their Sign" />
			</div>
			<ul id="subNav">
				<li><span>Select a category:</span></li>
				<li id="terrificTuesdayCamp" class="subNavLink">Terrific Tuesday Camp</li>
				<li id="seniorDanceCamp" class="subNavLink">Senior Dance Camp</li>
			</ul>
			<div id="terrificTuesdayCampCont" class="infoCont">
				<h2 class="sectionTitle">Terrific Tuesday Camp</h2>
				<div class="copy">
					<p>
						<b>When:</b><br/>
						June 10th, 17th, 24th and July 1st<br/><br/>
						<b>Who:</b><br/>
						<b>Ages:</b> 3-6 <b>Time:</b> 10:30-12:00<br/>
						<b>Ages:</b> 7-13 <b>Time:</b> 12:30-2:30<br/><br/>
					</p>
					<p>
						<b>Cost:</b> $15 per Tuesday or purchase all four Tuesdays as a package for a discounted price of $50*<br/><br/>
					</p>
					<p><b>What:</b><br/>
					Our Terrific Tuesday Camp is full of exciting sessions and opportunities for your children to learn and have fun! Each Tuesday there will be two sessions provided for our students. These sessions include Ballet, Gymnastics, Hip Hop, Art, Props, Irish, Rhythm, and more! On the second and fourth Tuesdays our sessions will be themed based as "Marry Poppins" and "Frozen"!
					</p>
				</div>
			</div>
			<div id="seniorDanceCampCont" class="infoCont">
				<h2 class="sectionTitle">Senior Dance Camp</h2>
				<div class="copy">
					<p>
						<b>When:</b><br/>
						July 7th-11th<br/><br/>
						<b>Who:</b><br/>
						<b>Ages:</b> 14+ <b>Time:</b> 12:00-4:00<br/><br/>
						<b>Cost:</b> $80*<br/><br/>
					</p>
					<p><b>What:</b><br/>
					Fuzion's Senior Dance Camp - Hosted by Zion Dance Company is the perfect opportunity for that dancer who is looking to work hard and be pushed towards excellence! This week consist of 20 hours of conditioning, technique, and learning choreography from Zion's repertoire!
					</p>
				</div>
			</div><br/>
			<div id="disclaimer">*family discounts are available.</div>
		</div>
		<img class="bodyCap" src="images/bodyBottom.png" height="9" width="978" alt="Body Bottom" />
		<?php include 'includes/_footer.php' ?>
	</div>
</body>
</html>