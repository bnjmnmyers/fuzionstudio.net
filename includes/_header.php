<div id="header">
	<div id="logo">
		<a href="/index.php">
			<img src="images/logo.png" height="78" width="248" alt="Fuzion Studio of the Arts Logo" title="Fuzion Studio of the Arts Logo" />
		</a>
	</div>
	<p id="phone">Call Us (865) 309-4FSA (4372)</p>
	<div id="socialIcons">
		<a href="http://www.facebook.com/FuzionStudio" target="_blank"><img src="images/facebookIcon.png" height="39" width="37" alt="Facebook Icon" title="Facebook Icon" /></a>
		<a href="http://www.twitter.com/FuzionTweets" target="_blank"><img src="images/twitterIcon.png" height="39" width="37" alt="Twitter Icon" title="Twitter Icon" /></a>
		<!--<a href="https://plus.google.com/116433762664336398186/posts" target="_blank"><img src="images/googleIcon.png" height="39" width="37" alt="Google Icon" title="Google  Icon" /></a>-->
	</div>
	<?php
		if((isset($_SESSION['username']) && strlen($_SESSION['username']) > 0) && (isset($_SESSION['password']) && strlen($_SESSION['password']) > 0) && !strlen($_REQUEST['logout']))
		{
	?>
			<div id="salutation">
				<a href="admin.php?logout=yes" id="logoutBtn">[logout]</a>
				<h3 class="floatL">Welcome, <a href="adminPanel.php"><?php echo $_SESSION['firstname']; ?></a>!</h3>
			</div>	
	<?php
		}
	?>
	<div id="nav">
		<ul>
			<li id="navHome"><a href="index.php">HOME</a></li>
			<li id="navAbout"><a href="about.php">ABOUT</a></li>
			<li id="navClasses"><a href="classes.php">CLASSES</a></li>
			<li id="navSchedule"><a href="schedule.php">SCHEDULE</a></li>
			<!--<li id="navZummer"><a href="zummer.php">ZUMMER CAMP</a></li>
			<li id="navPricing"><a href="pricing.php">PRICING</a></li>
			<li id="navTestimonials"><a href="testimonials.php">TESTIMONIALS</a></li>
			<li id="navMedia"><a href="media.php">MEDIA</a></li>-->
			<li id="navDownloads"><a href="downloads.php">DOWNLOADS</a></li>
			<li id="navContact"><a href="contact.php">CONTACT</a></li>
		</ul>
	</div>
</div>