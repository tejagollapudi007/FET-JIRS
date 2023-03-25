<!DOCTYPE html>
<html>
<head>
	<title>Login and Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<div class="login-box">
			<h2>Login</h2>
			<form action="validation.php" method="post">
				<label>Username</label>
				<input type="text" name="user" required>
				<label>Password</label>
				<input type="password" name="password" required>
				<input type="submit" value="Login">
			</form>
		</div>
		<div class="register-box">
			<h2>Register</h2>
			<form action="registration.php" method="post">
				<label>Username</label>
				<input type="text" name="user" required>
				<label>Password</label>
				<input type="password" name="password" required>
				<input type="submit" value="Register">
			</form>
		</div>
	</div>
</body>
</html>
