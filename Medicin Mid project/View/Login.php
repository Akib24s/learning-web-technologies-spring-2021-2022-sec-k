<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="POST" action="../controllers/loginCheck.php">
		
			<fieldset style="width: 400px;">
				<legend>Login</legend>
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value=""></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value=""></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="checkbox" name="rememberme" value=""> remember me?</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"><a href="Home.php">   Back<br><a href="Forgotpassword.php">Forgot Password</td>
			</tr>
			
			
			
		</table>
			</fieldset>
	</form>
</body>
</html>