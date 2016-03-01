<?php
	include 'includes/classes/person.php';
	// Params for instantiating a new Person
	/*
		$firstName 
		$middleInitial 
		$lastName 
		$gender 
		$birthdate 
		$email 
		$phone 
		$address 
		$city 
		$state 
		$zip 
		$personType 
		$isActive
	*/
?>
<html>
	<head></head>
	<body>
		<a href="test.php">Back</a><br/>
		
		<?php
			$newPerson = new Person(
				$_POST['firstName'], 
				$_POST['middleInitial'], 
				$_POST['lastName'], 
				"F", 
				"2009-09-24", 
				$_POST['email'], 
				$_POST['phone'], 
				$_POST['address'], 
				$_POST['city'], 
				$_POST['state'], 
				$_POST['zip'], 
				"Student", 
				1
			);
			echo "<b>Student:</b><br/>";
			echo $newPerson->firstName." ".$newPerson->middleInitial." ".$newPerson->lastName."<br/>";
			echo $newPerson->address."<br/>";
			echo $newPerson->city." ".$newPerson->state.", ".$newPerson->zip."<br/>";
			echo $newPerson->email."<br/>";
			echo $newPerson->phone."<br/><br/>";
			foreach($_POST['classes'] as $class)
			{
				$newPerson->addClass($class);
			}
			echo "<b>Classes:</b></br>";
			foreach($newPerson->classes as $class){
				echo "{$class}<br/>";
			}
			unset($class);
		?>
	</body>
</html>