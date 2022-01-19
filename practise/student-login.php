<!DOCTYPE html>
<?php include('templates/header.php'); ?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student login</title>
</head>
<body>
	<div class="student-form">
		<form class="student-login">
			<label for="student-email">Your email:</label><br>
			<input type="email" name="student-email" id="student-email" required><br><br>

			<label for="student-password">Your password:</label><br>
			<input type="password" name="student-password" id="student-password" required><br><br>

			<input type="submit" name="submit" value="Login" id="student-login-btn"><br><br>
			<a href="home-page.php" id="student-back-to-home">Back to home page</a>
		</form>
	</div>
</body>
</html>