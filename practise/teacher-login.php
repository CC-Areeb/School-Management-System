<!DOCTYPE html>
<?php include('templates/header.php'); ?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student login</title>
</head>
<body>
	<div class="teacher-form">
		<form class="teacher-login">
			<label for="teacher-email">Your email:</label><br>
			<input type="email" name="teacher-email" id="teacher-email" required><br><br>

			<label for="teacher-password">Your password:</label><br>
			<input type="password" name="teacher-password" id="teacher-password"required><br><br>

			<input type="submit" name="submit" value="Login" id="teacher-login-btn"><br><br>
			<a href="home-page.php" id="teacher-back-to-home-btn">Back to home page</a>
		</form>
	</div>
</body>
</html>