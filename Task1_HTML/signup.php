<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="signup.css">
	<title>Form Signup</title>
</head>
<body>
<script src="snowstorm.js"></script>
<div class="container">
		<form method="post" action="signup.php"class="form-signup">
			<h1>Đăng ký tài khoản</h1>
			<div class="form-text">
				<label>Username</label>
				<input type="text" name="username" value="" required>
			</div>
			<div class="form-text">
				<label>Password</label>
				<input type="password" name="password" value="" required/>
			</div>
			<div class="form-text">
				<label>Email</label>
				<input type="email" name="email" value="" required/>
			</div>
			<div class="form-text">
				<label>Fullname</label>
				<input type="text" name="fullname" value="" required/>
			</div>
			<div class="form-text">
				<label>Birthday</label>
				<input type="text" name="birthday" value="" required/>
			</div>
			<div class="form-text">
				<label>Sex</label>
				<input type="text" name="sex" value="" required/>
			</div>
			<button type="submit" name="dangky">Đăng ký</button>
			<?php require 'xulydk.php';?>
		</form>
	</div>
</body>
</html>