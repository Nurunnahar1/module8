 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
 <h2>Login Form</h2>
	<?php
		if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
			$email = $_POST["email"];
			$password = $_POST["password"];

			// Validate form fields
			$errors = array();

			if(empty($email)) {
				$errors[] = "Email address is required.";
			} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$errors[] = "Invalid email format.";
			}

			if(empty($password)) {
				$errors[] = "Password is required.";
			}

			// If no errors, redirect to welcome page
			if(empty($errors)) {
				// Check if login credentials are valid
				// Here, we are using a dummy email address and password for demonstration purposes
				$valid_email = "nurunnahar9081@gmail.com";
            }
        }
            ?>
 </body>
 </html>