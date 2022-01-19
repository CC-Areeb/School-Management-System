<!DOCTYPE html>
<?php include('templates/header.php'); ?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registeration Page</title>
</head>
<body>
	<div class="sign-up">
		<form class="sign-up-form">
			<label for="first-name">First Name:</label><br>
			<input type="text" name="first-name" id="first-name" required><br><br>

			<label for="last-name">Last Name:</label><br>
			<input type="text" name="last-name" id="last-name" required><br><br>

			<label for="register-email">Email:</label><br>
			<input type="email" name="register-email" id="register-email" required><br><br>

			<label for="register-password">Password:</label><br>
			<input type="password" name="register-password" id="register-password" required><br><br>

			<label for="register-confirm-password">Confirm password:</label><br>
			<input type="password" name="register-confirm-password" id="register-confirm-password" required><br><br>

			<input type="submit" name="submit" value="Register" id="sign-up-form-btn"><br><br>
			<a href="home-page.php" id="register-back-to-home-btn">Back to home page</a>
		</form>
	</div>
</body>
</html>