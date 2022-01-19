<?php include('templates/header.php'); ?>

<?php
	if (isset($_POST['submit'])) {
		echo htmlspecialchars($_POST['first-name']).'<br>';
		echo htmlspecialchars($_POST['last-name']).'<br>';
		echo htmlspecialchars($_POST['register-email']).'<br>';

		if (htmlspecialchars($_POST['register-password']) === htmlspecialchars($_POST['register-confirm-password'])) {
			echo 'Welcome to ABC University';
		}

		else{
			echo 'Your passwords did not match ~(x_x)~';
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<div class="display-page-container"><br><br>
		<a href="home-page.php" id="display-back-to-home-btn">Back to home page</a>
	</div>
</body>
</html>
