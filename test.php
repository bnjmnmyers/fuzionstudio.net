<html>
	<head></head>
	<body>
		<form method="post" action="test2.php">
			<label>First Name:</label>
			<input type="text" name="firstName" />
			<label>Middle</label>
			<input type="text" name="middleInitial" size="1" maxlength="1" />
			<label>Last Name:</label>
			<input type="text" name="lastName" /><br/>
            <label>Address:</label>
            <input type="text" name="address" /><br/>
            <label>City:</label>
            <input type="text" name="city" />
            <label>State:</label>
            <input type="text" name="state" size="2" maxlength="2" />
            <label>Zip:</label>
            <input type="text" name="zip" size="5" maxlength="5" /><br/>
            <label>Email:</label>
			<input type="text" name="email" />
			<label>Phone:</label>
			<input type="text"name="phone"/>
			<h3>Classes:</h3>
			<input type="checkbox" name="classes[]" value="Ballet">Ballet<br/>
			<input type="checkbox" name="classes[]" value="Irish">Irish<br/>
			<input type="checkbox" name="classes[]" value="Modern">Modern<br/>
			<input type="submit" value="submit" />
		</form>
	</body>
</html>