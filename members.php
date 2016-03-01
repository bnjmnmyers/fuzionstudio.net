<?php
	session_start();
	include 'includes/_functions.php';
	$classID = 0;
	
	if(isset($_SESSION['username']) && strlen($_SESSION['username']) > 0 && isset($_SESSION['password']))
	{
		logout($_REQUEST['logout']);
		if(isset($classID))
		{
			$students = getAllStudents();
		}
	}
	else
	{
		header('Location: admin.php');	
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="Fuzion Studio About Page - Gives and over view of the vizion and misson of Fuzion." />
	<meta name="keywords" content="dance studio, dance class, dance classes, jefferson city, jefferson city dance studio, dance studio jefferson city, dance class in jefferson city tn, jefferson city tn, jefferson city tennessee, fuzion studio, FS, piloxing, jefferson city, piloxing, fitness classes, fitness, fitness classes in jefferson city tn" />
	<title>Fuzion Studio | Members Page</title>
	<link rel="shortcut icon" href="http://www.fuzionstudio.net/favicon.ico" />
	<link href="css/members.css" type="text/css" rel="stylesheet" />
	<link href="css/fuzion-theme/jquery-ui-1.10.0.custom.css" rel="stylesheet">
	<?php include 'includes/_scriptIncludes.php' ?>
	<script type="text/javascript" language="javascript" src="js/jquery-ui-1.10.0.custom.min.js"></script>
	<script type="text/javascript" language="javascript">
		$(document).ready(function(){
			$('#adultForm, #studentForm, #guardianForm').hide();
		});
		$(function(){
			$("#birthDatePicker").datepicker({
				inline: true
			});
			$("#joinDatePicker").datepicker({
				inline: true
			});
		})
	</script>
</head>

<body>
	<div id="wrapper">
		<?php include 'includes/_header.php' ?>
		<img class="bodyCap" src="images/bodyTop.png" height="9" width="978" alt="Body Top" />
		<div id="content">
			<h1 id="pageTitle_admin">Member Management</h1>
			<ul id="subNav">
            	<li></li>
				<li id="viewMembers" class="subNavLink">View Members</li>
				<li id="registerMembers" class="subNavLink">Register Members</li>
				<li id="editMembers" class="subNavLink">Edit Members</li>
			</ul>
			<div class="infoCont_noSideNav">
            	<div id="viewMembersCont" class="infoCont">
					<?php
                        if(isset($students))
                        {
                            echo "<table>
                                        <tr>
                                            <td class='columnLabel'>First Name</td>
                                            <td class='columnLabel'>Last Name</td>
                                            <td class='columnLabel'>Address</td>
                                            <td class='columnLabel'>Phone</td>
                                            <td class='columnLabel'>Email</td>
                                            <td class='columnLabel'>Class Info</td>
                                        </tr>";
                                        while($studentData = mysql_fetch_array($students))
                                        {
                                            $address = $studentData['address'];
                                            $city = $studentData['city'];
                                            $email = $studentData['email'];
                                            $firstName = $studentData['firstName'];
                                            $lastName = $studentData['lastName'];
                                            $phone = $studentData['phone'];
                                            $zip = $studentData['zip'];
                                            $state = $studentData['state'];
                                            
                                            echo
                                                "<tr class='memberRow'>
                                                    <td>".$firstName."</td>
                                                    <td>".$lastName."</td>
                                                    <td>".$address."<br/>".$city.", ".$state." ".$zip."</td>
                                                    <td>".$phone."</td>
                                                    <td>".$email."</td>
                                                    <td><a href='classInfo.php'>View</a></td>
                                                </tr>";
                                        }	
                            
                            echo "</table>";
                        }
                    ?>
            	</div>
                <div id="registerMembersCont" class="infoCont">
                    <div id="memberForm" class="well">
                        <form>
                        	<h4>Student Information</h4>
                        	<div class="nameFields">
                            	<div class="input-group">
                                    <span id="firstName-addon" class="input-group-addon member-input-label">First Name</span>
                                    <input type="text" name="firstName" class="form-control" aria-describedby="firstName-addon" />
                                </div>
                                <div class="input-group">
                                    <span id="lastName-addon" class="input-group-addon member-input-label">Last Name</span>
                                	<input type="text" name="lastName" class="form-control" aria-describedby="lastName-addon" />
                                </div>
                            </div>
                            <div class="dateFields">
                            	<div class="input-group">
                                	<span id="birthdate-addon" class="input-group-addon member-input-label">Birth Date</span>
                                	<input id="birthDatePicker" type="text" name="brithDate" class="form-control" aria-describedby="birthdate-addon" placeholder="ex. 11/19/1982" 
                                    onblur="getAge(document.getElementById('birthDatePicker').value)" />
                                </div>
                                <div class="input-group">
                                	<span id="joindate-addon" class="input-group-addon member-input-label">Join Date</span>
                                	<input id="joinDatePicker" type="text" name="joinDate" class="form-control" aria-describedby="joindate-addon" placeholder="ex. 11/19/1982" />
                                </div>
                            </div>
                            <div class="genderFields">
                            	<label>Gender:</label>
                                <input type="radio" name="gender" value="F" checked="checked" />
                                <label class="radioButtonLabel">F</label>
                                <input type="radio" name="gender" value="M" />
                                <label class="radioButtonLabel">M</label>
                            </div>
                            <div class="ageFields">
                            	<label>Is Student Under 18?:</label>
                                <input type="radio" name="underAge" value="Y" checked="checked" onclick="toggleGuardianFields()"/>
                                <label class="radioButtonLabel">Y</label>
                                <input type="radio" name="underAge" value="N" onclick="toggleGuardianFields()" />
                                <label class="radioButtonLabel">N</label>
                            </div>
                            <div class="field-divider"></div>
                            <div id="guardian-fields">
                                <h4>Guardian Information</h4>
                                <div class="nameFields">
                                    <div class="input-group">
                                        <span id="guardian-firstName-addon" class="input-group-addon member-input-label">First Name</span>
                                        <input type="text" name="firstName" class="form-control" aria-describedby="guardian-firstName-addon" />
                                    </div>
                                    <div class="input-group">
                                        <span id="guardian-lastName-addon" class="input-group-addon member-input-label">Last Name</span>
                                        <input type="text" name="lastName" class="form-control" aria-describedby="guardian-lastName-addon" />
                                    </div>
                                </div>
                                <div class="genderFields">
                                    <label>Gender:</label>
                                    <input type="radio" name="guardian-gender" value="F" checked="checked" />
                                    <label class="radioButtonLabel">F</label>
                                    <input type="radio" name="guardian-gender" value="M" />
                                    <label class="radioButtonLabel">M</label>
                                </div>
                                <div class="field-divider"></div>
                            </div>
                            <h4>Contact Information</h4>
                            <div id="addressFields">
                            	<div class="input-group">
                                    <span id="address-addon" class="input-group-addon">Address</span>
                                    <input id="addressInput" type="text" name="address" class="form-control" aria-describedby="address-addon" />
                                </div>
                                <div id="cityGroup" class="input-group">
                                	<span id="city-addon" class="input-group-addon">City</span>
                                    <input id="cityInput" type="text" name="city" class="form-control" aria-describedby="city-addon" />
                                </div>
                                <div id="stateGroup" class="input-group">
                                	<span id="state-addon" class="input-group-addon">State</span>
                                    <input id="stateInput" type="text" name="state" class="form-control" aria-describedby="state-addon" />
                                </div>
                                <div id="zipGroup" class="input-group">
                                	<span id="zip-addon" class="input-group-addon">Zip</span>
                                    <input id="zipInput" type="text" name="zip" class="form-control" aria-describedby="zip-addon" />
                                </div>
                                <div id="emailGroup" class="input-group">
                                	<span id="email-addon" class="input-group-addon">E-mail</span>
                                    <input id="emailInput" type="text" name="email" class="form-control" aria-describedby="email-addon" />
                                </div>
                                <div id="phoneGroup" class="input-group">
                                	<span id="phone-addon" class="input-group-addon">Phone</span>
                                    <input id="phoneInput" type="text" name="phone" class="form-control" aria-describedby="phone-addon" placeholder="ex. 555-555-5555" />
                                </div>
                            </div>
                            <div class="field-divider"></div>
                            <div id="memberTypeFields">
                            	<label>Member Type: (check all that apply)</label><br/>
                                <div class="input-group">
                                	<span class="input-group-addon member-type-checkbox">
                                		<input type="checkbox" name="student" value="student" aria-label="student-addon" />
                                    </span>
                                    <input class="form-control member-type-label" contenteditable="false" disabled="disabled" aria-label="student-addon" value="Student" />
                                </div>
                                <div class="input-group">
                                	<span class="input-group-addon member-type-checkbox">
                                		<input type="checkbox" name="guardian" value="guardian" aria-label="guardian-addon" />
                                    </span>
                                    <input class="form-control member-type-label" contenteditable="false" disabled="disabled" aria-label="guardian-addon" value="Guardian" />
                                </div>
                                <div class="input-group">
                                	<span class="input-group-addon member-type-checkbox">
                                		<input type="checkbox" name="instructor" value="instructor" aria-label="instructor-addon" />
                                    </span>
                                    <input class="form-control member-type-label" contenteditable="false" disabled="disabled" aria-label="instructor-addon" value="Instructor" />
                                </div>
                            </div>
                            <label>Is Member Active:</label>
                            <input type="radio" name="isActive" value="1" />
                            <label class="radioButtonLabel">Y</label>
                            <input type="radio" name="isActive" value="0" />
                            <label class="radioButtonLabel">N</label>
                            <input type="hidden" name="isUnderAge" value="0" />
						</form>
                    </div>
                </div>
                <div id="editMembersCont" class="infoCont">
                EDIT
                </div>
			</div>
		</div>
		<img class="bodyCap" src="images/bodyBottom.png" height="9" width="978" alt="Body Bottom" />
		<?php include 'includes/_footer.php' ?>
	</div>
    <script type="text/javascript">
		function showAdultStudentForm(){
			$('#adultForm').show();
			$('#studentForm').hide();
			$('#guardianForm').hide();	
		}
		function showStudentForm(){
			$('#adultForm').hide();
			$('#studentForm').show();
			$('#guardianForm').hide();
		}
		function showGuardianForm(){
			$('#adultForm').hide();
			$('#studentForm').hide();
			$('#guardianForm').show();
		}
		function toggleGuardianFields(){
			$('#guardian-fields').toggle();	
		}
		

		function getAge(dateString) {
			console.log(dateString);
			var today = new Date();
			var birthDate = new Date(dateString);
			var age = today.getFullYear() - birthDate.getFullYear();
			var m = today.getMonth() - birthDate.getMonth();
			if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
				age--;
			}
			
			getClassesByAge(age);
		}
		
		function getClassesByAge(age){
			console.log("got here")
			$.ajax({
				type: "POST",
				url: '/includes/_functions.php',
				data: age,
				success: function(data)
				{
					console.log("made it");
					console.log(data);
				}
			});
		}
	</script>
</body>
</html>