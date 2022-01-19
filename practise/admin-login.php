<!DOCTYPE html>
<?php include('templates/header.php'); ?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin login</title>
</head>
<body>
	<div class="admin-form">
		<form class="teacher-login">
			<label for="admin-email">Your email:</label><br>
			<input type="email" name="admin-email" id="admin-email" required><br><br>

			<label for="admin-password">Your password:</label><br>
			<input type="password" name="admin-password" id="admin-password"required><br><br>

			<input type="submit" name="submit" value="Login" id="admin-login-btn"><br><br>
			<a href="home-page.php" id="admin-back-to-home-btn">Back to home page</a>
		</form>
	</div>
</body>
</html>

