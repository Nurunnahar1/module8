<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
	<h2>Registration Form</h2>
	<?php
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			$first_name = $_POST["first_name"];
			$last_name = $_POST["last_name"];
			$email = $_POST["email"];
			$password = $_POST["password"];
			$confirm_password = $_POST["confirm_password"];

			// Validate form fields
			$errors = array();

			if(empty($first_name)) {
				$errors[] = "First name is required.";
			}

			if(empty($last_name)) {
				$errors[] = "Last name is required.";
			}

			if(empty($email)) {
				$errors[] = "Email address is required.";
			} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$errors[] = "Invalid email format.";
			}

			if(empty($password)) {
				$errors[] = "Password is required.";
			}

			if(empty($confirm_password)) {
				$errors[] = "Confirm password is required.";
			} else if($password != $confirm_password) {
				$errors[] = "Password and confirm password do not match.";
			}

			// If no errors, display confirmation message
			if(empty($errors)) {
				echo "<p>Registration successful! Welcome, $first_name.</p>";
			} else {
				echo "<ul>";
				foreach($errors as $error) {
					echo "<li>$error</li>";
				}
				echo "</ul>";
			}
		}
	?>
	<form method="post">
		<label for="first_name">First Name:</label>
		<input type="text" id="first_name" name="first_name" required><br>

		<label for="last_name">Last Name:</label>
		<input type="text" id="last_name" name="last_name" required><br>

		<label for="email">Email Address:</label>
		<input type="email" id="email" name="email" required><br>

		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required><br>

		<label for="confirm_password">Confirm Password:</label>
		<input type="password" id="confirm_password" name="confirm_password" required><br>

		<input type="submit" value="Register">
	</form>
 
</body>
</html>