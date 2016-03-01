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
	<meta name="description" content="Fuzion Studio About Page - Gives and over view of the vizion and misson of Fuzion." />
	<meta name="keywords" content="dance studio, dance class, dance classes, jefferson city, jefferson city dance studio, dance studio jefferson city, dance class in jefferson city tn, jefferson city tn, jefferson city tennessee, fuzion studio, FS, piloxing, jefferson city, piloxing, fitness classes, fitness, fitness classes in jefferson city tn" />
	<title>Fuzion Studio | About the dance studio vision and mission statement</title>
	<link href="css/global.css" type="text/css" rel="stylesheet" />
	<link href="css/about.css" type="text/css" rel="stylesheet" />
	<?php include 'includes/_scriptIncludes.php' ?>
</head>

<body>
	<div id="wrapper">
		<?php include 'includes/_header.php' ?>
		<img class="bodyCap" src="images/bodyTop.png" height="9" width="978" alt="Body Top" />
		<div id="content">
			<h1 id="pageTitle">About</h1>
			<div id="banner">
				<img src="images/about/banner.jpg" height="172" width="929" alt="Image of Owners and Sign" title="Fuzion Studio Owners and Their Sign" />
			</div>
			<ul id="subNav">
				<li><span>Select a category:</span></li>
				<li id="whoWeAre" class="subNavLink">Who We Are</li>
				<li id="missionStatement" class="subNavLink">Mission Statement</li>
				<li id="vizionStatement" class="subNavLink">Vizion Statement</li>
				<li id="theStaff" class="subNavLink">The Staff</li>
			</ul>
			<div id="whoWeAreCont" class="infoCont">
				<h2 class="sectionTitle">Who We Are</h2>
				<div class="copy">
					<p>
						Fuzion Studio offers fitness and dance classes in Jefferson City, TN at 280 West Old Andrew Johnson Highway
						and is owned and operated by Kara Moss and MacKenzie Myers. These two sisters have
						a passion to dance and to offer quality instruction in a Christian atmosphere. Both have danced
						since age 3 and have dreamed of opening their own facility. With a vision to fuse quality instruction
						with values and integrity, Fuzion was born.
						Combined, Kara and MacKenzie offer over 20 years of teaching experience. 
					</p><br/>
					<p>
						Kara's primary training has been Ballet and Pointe and she operates as  Artistic Director
						and an instructor at the studio. 
					</p><br/>
					<p>
						MacKenzie's focus has been Ballet and Irish and operates as the Director of the studio
						and an instructor. Also, MacKenzie is one of a very few certified Piloxing instructors along the East Coast. 
					</p><br/>
					<p>
						This sister duo is dynamic and passionate about what they do, and they welcome you to Fuzion Studio. 
					</p>
				</div>
			</div>
			<div id="missionStatementCont" class="infoCont">
				<h2 class="sectionTitle">Mission Statement</h2>
				<div class="copy">
					<p>
						Fuzion Studio encourages both artistic expression as well as a healthy lifestyle.
						Through our doors you will find a positive, encouraging, fun, christian environment where all will feel
						welcome as they pursue their interest in the arts and healthy living.  
					</p><br/>
					<p>
						Fuzion offers classes for all ages from the beginner to the more advanced. These classes will focus on
						excellent technique while fostering an appreciation for the arts. 
					</p><br/>
					<p>
						In addition to offering a variety of dance, art, drama, music, gymnastics, and fitness classes it is also our goal 
						at Fuzion to foster a heart of worship.  We are dedicated to the truth that God is the Creator of all things
						and is worthy of our worship through every avenue of expressions available to us.
					</p><br/>
					<p>
						Our passion for the arts combined with our heart for the Lord is what compels us to open our doors.<br/>
						Fuzion Studio -- Fusing artistic expression with the heart of Heaven.
					</p>
				</div>
			</div>
			<div id="vizionStatementCont" class="infoCont">
				<h2 class="sectionTitle">Vizion Statement</h2>
				<div class="copy">
					<p>
						At Fuzion Studio, our vision is to provide a venue for those who desire to grow
						in artistic expression through dance, art, drama, gymnastics, fitness, and music.
						Encouraging both the artistic expression and a healthy lifestyle in a positive christian environment. 
					</p>
				</div>
			</div>
			<div id="theStaffCont" class="infoCont">
				<h2 class="sectionTitle">The Staff</h2>
				<div class="copy">
					<div class="staff">
						<h3 class="floatL">MacKenzie Myers</h3><span class="staffTitle"> - Owner/Director/Instructor</span><br/>
						<p class="well">
							MacKenzie Myers is living her dream. Alongside her sister, the two have dreamed of the day they would open their own studio. Though they have been teaching for many years, the desire to open their own doors became a reality in January of 2012. MacKenzie has been dancing since she was three, and has been trained in Ballet, Jazz, Tap and Irish. She has participated in classes from Illuminer Fine Arts Studio, formerly located in Morristown, Studio Arts in Knoxville, and trained and performed with an Irish company based out of Kingsport. MacKenzie has ten years of teaching experience and enjoys teaching all different ages.<br/> 
Though MacKenzie enjoys dancing and teaching dance classes, she has found that her real passion is in the fitness world. She began instructing a Pilates class in 2011, and knew then that she was hooked. From there, MacKenzie received her certification in Piloxing and Zumba, and desires to continue her fitness education to be titled Fitness Professional. Her heart is to encourage and be that "I can!" voice in your ear as you step foot into her fitness classes. Fuzion Fitness is a branch of Fuzion Studio of the Arts and is committed to provide fun, safe and effective fitness classes. Fuzion Fitness' motto...be changed. live changed. And MacKenzie stands by that. Her goal is simple, to see her clients succeed and live the fullest life they can.<br/>
MacKenzie serves Fuzion as part-owner, Director, and Instructor. She is married to the man of her dreams, Benjamin Myers, and has the joy of mothering two beautiful daughters, Hannah-Brooke and Judah-Grace. MacKenzie is blessed every day that she gets to live her passion. MacKenzie is very close to her sister, Kara, and loves all the experiences they share together as they own Fuzion Studio.
						</p>
					</div>
					<div class="staff">
						<h3 class="floatL">Kara Moss</h3><span class="staffTitle"> - Owner/Instructor</span><br/>
						<p class="well">
							Kara Moss was raised in a home where appreciation of and participation in the arts was valued and encouraged.  She began taking dance classes at the age of three and it has been a large part of her life since.  Her primary focus in training has been ballet and pointe, but she has also had experience in gymnastics, jazz, and modern.  Kara studied dance under Dawn Pruszkowski at Illuminer Fine Arts Studio in Morristown and Studio Arts in Knoxville.  While at Illuminer Fine Arts Studio she had the opportunity to be an assistant teacher in the young ballet classes as well join Illuminer’s traveling ministry team, “The Company.”  While living in Dagestan, Russian she had the tremendous opportunity to study Ballet and Pointe with the St. Petersburg Ballet.  In addition to her training at both local and international studios, Kara has attended Ballet Magnificat!’s summer dance intensive.<br/> 
	Kara earned her bachelors degree in human development with a minor in early childhood development from East Tennessee State University.  This background is a tremendous asset as she teaches dance to children. Kara has led dance ministries and is currently serving on the worship arts team at Heritage Fellowship in Jefferson City.    Teaching dance workshops and speaking at worship arts conferences, Kara’s heart is to see the arts restored to the Kingdom, and is passionate about seeing others equipped in their giftings and talents. 
						</p>
					</div>
					<div class="staff">
						<h3 class="floatL">Mary Kate Jones</h3><span class="staffTitle"> - Dance Instructor</span><br/>
						<p class="well">
							Mary Kate Jones loves every minute teaching at Fuzion Studio. She has always dreamed of becoming a dance instructor, and now that dream has come to be a reality. Mary Kate has been dancing since the age of 5, and has pursued it ever since. She has been trained, and is still training in ballet, modern, jazz, irish, and pointe. She has taken dance classes at Trinity Performing Arts, Fuzion Studio, Turning Pointe in Morristown, and Studio Arts in Knoxville. She has also had the experience of attending the Ballet Magnificat! summer intensive in Jackson, MS.
Mary Kate is very thankful to MacKenzie, and Kara for this amazing opportunity to teach and invest in the lives of the Fuzion students.
						</p>
					</div>
					<!--<div class="staff">
						<h3 class="floatL">Joshua Loveday</h3><span class="staffTitle"> - Dance Instructor</span><br/>
						<p>
							Joshua is a student at Walters State Community College, the self-employed photographer of Joshua W. Loveday Photography, and lives here in Jefferson County in the town of White Pine. He has always felt as though he was specifically "wired" for the expression of the arts and has done so mainly through dancing, photographing, acting, and writing. He began his dancing journey in 2007 taking Irish soft shoe and hard shoe classes and eventually stepped into taking ballet classes a few years later. Joshua soon discovered that there were not many other things, apart from dance, that he so connected to and became one with. He has been involved with many dance and drama "X-Press It" camps as both a student and an instructor. Now, in 2012, Joshua finds himself passionately making dance a very significant part of his life by continuing to take ballet classes and by instructing his second semester of the Sr. Division's "Men's Intro To Dance" class here at Fuzion Studio! He is very thankful and excited to be part of the Fuzion Studio staff and plans to continue his dancing journey for many, many years.
						</p>
					</div>-->
					<div class="staff">
						<h3 class="floatL">Anna Johnson</h3><span class="staffTitle"> - Dance Instructor</span><br/>
						<p>
							
						</p>
					</div>
					<div class="staff">
						<h3 class="floatL">Victoria Grimes</h3><span class="staffTitle"> - Gymnastics Instructor</span><br/>
						<p class="well">
							Victoria has been doing gymnastics since she was three years old and it has always been a passion in her life. She brings 5 years of teaching experience to Fuzion.
						</p>
					</div>
                    <div clas="staff">
                    	<h3 class="floatL">Christopher McConkey</h3><span class="staffTitle"> - Hip-Hop Instructor</span><br/>
                        <p></p>
                    </div>
				</div>
			</div>
		</div>
		<img class="bodyCap" src="images/bodyBottom.png" height="9" width="978" alt="Body Bottom" />
		<?php include 'includes/_footer.php' ?>
	</div>
</body>
</html>