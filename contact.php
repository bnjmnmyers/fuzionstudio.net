<?php

	$email = $_REQUEST['email'];
	$error = '';
	$firstName = $_REQUEST['firstName'];
	$lastName = $_REQUEST['lastName'];
	$success = false;
	
	if($_POST['submit'] && $_REQUEST['honeyPot'] == '')
	{
		if($firstName != '')
		{
			if($lastName != '')
			{
				if($email != '')
				{
					$subject = "Fuzion Inquiry";
					$firstName = $_REQUEST['firstName'];
					$lastName = $_REQUEST['lastName'];
					$from = $_REQUEST['email'];
					$message = $_REQUEST['comments'];
					$header = "from: ".$firstName.' '.$lastName.' '.'<'.$from.'>';
					$to = "bmyers@fuzionstudio.net; info@fuzionstudio.net";
					
					mail($to,$subject,$message,$header);
					
					if($firstName != '' && $lastName != '' && $email !='')
					{
						$email = '';
						$firstName = '';
						$lastName = '';
						$message = '';
						$success = true;	
					}
				}
				else
				{
					$error = "Please enter an email";
				}
			}
			else
			{
				$error = "Please enter a last name";
			}
		}
		else
		{
			$error = "Please enter a first name";
		}
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="Fuzion Studio Contact Page - Get in touch with Fuzion's studio director." />
	<meta name="keywords" content="dance studio, dance class, dance classes, jefferson city, jefferson city dance studio, dance studio jefferson city, dance class in jefferson city tn, jefferson city tn, jefferson city tennessee, fuzion studio, fuzion studio, piloxing, jefferson city, piloxing" />
	<title>Fuzion Studio | Contact</title>
	<link rel="shortcut icon" href="http://www.fuzionstudio.net/favicon.ico" />
	<link href="css/global.css" type="text/css" rel="stylesheet" />
	<link href="css/contact.css" type="text/css" rel="stylesheet" />
	<?php include 'includes/_scriptIncludes.php' ?>
</head>

<body>
	<div id="wrapper">
		<?php include 'includes/_header.php' ?>
		<img class="bodyCap" src="images/bodyTop.png" height="9" width="978" alt="Body Top" />
		<div id="content">
			<h1 id="pageTitle">Contact</h1>
			<div id="banner">
				<img src="images/about/banner.jpg" height="172" width="929" alt="Image of Owners and Sign" title="Fuzion Studio Owners and Their Sign" />
			</div>
			<div id="contactCont" class="infoCont">
                <div id="formCont" class="floatL">
                    <?php
                        if($success == true)
                        {
                    ?>
                            <h3>Thank You For Contacting Us</h3>
                            <p>We received your comments/questions and will respond as quickly as possible.</p><br/>
                            <p>If you do not receive a response within 2 business days please contact us directly at <a id="emailAddy" href="mailto:info@fuzionstudio.net">info@fuzionstudio.net</a>.</p>
                            <br/><br/>
                    <?
                        }
                    ?>
                    <?php if($error != '')
						{
					?>
                    	<span class="error alert alert-danger"><?php echo $error ?></span>
                    <?php
						}
					?>
                    <?php
						if($success == false)
						{
					?>
                        <form method="post" action="contact.php">
							<input type="hidden" name="honeyPot" value="" />
                            <div class="floatL">
                                <label for="firstName">First Name: (required)</label>
                                <input name="firstName" type="text" value="<?php echo $firstName ?>" />
                            </div>
                            <div>
                                <label for="flastName">Last Name: (required)</label>
                                <input name="lastName" type="text" value="<?php echo $lastName ?>" />
                            </div>
                            <div>
                                <label for="email">Email: (required)</label>
                                <input name="email" type="text" value="<?php echo $email ?>" /><br/><br/>
                            </div>
                            <label for="comments">Comments/Questions</label>
                            <textarea name="comments" rows="200" cols="400" style="height:200px; width:400px;"></textarea><br/>
                            
                            <input class="btn btn-sm btn-default" type="submit" value="submit" name="submit" onclick="_gaq.push(['_trackEvent', 'Contact Form', 'Submit']);"/>
                            
                        </form>
                    <?php
						}
					?>
                </div>
                <div id="contactInfo">
                    <p class="heading">Address:</p> 
                    <p>280 West Old Andrew Johnson Highway</p>
                    <p>Jefferson City, TN 37760</p>
                    
                    <p class="heading">Phone:</p> 
                    <p>(865) 309-4FSA (4372)</p>
                    
                    <p class="heading">E-Mail:</p> 
                    <p>info@fuzionstudio.net</p>
                </div>
                <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6445.827661743491!2d-83.50384899999996!3d36.11995700000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x885b8c832c3a4671%3A0x896dc0e113bab18e!2sFuzion+Studio+of+the+Arts!5e0!3m2!1sen!2sus!4v1415734407820" width="928" height="400" frameborder="0" style="border:0"></iframe>
            </div>
		</div>
		<img class="bodyCap" src="images/bodyBottom.png" height="9" width="978" alt="Body Bottom" />
		<?php include 'includes/_footer.php' ?>
	</div>
</body>
</html>