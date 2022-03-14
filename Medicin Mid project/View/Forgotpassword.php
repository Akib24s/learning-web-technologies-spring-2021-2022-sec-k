//<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forgot Password </title>
</head>
<body>
	
		<form method="POST" action="../Controllers/Passwordchange.php">
			<fieldset>
				<table>
				<legend>Forgot Password</legend>
				<tr>
					<td>Type your Email</td>
					<td><input type="email" name="email" value=""></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
				<tr>
					<td>Old Password</td>
					<td><input type="text" name="oldpassword" value=""></td>
				</tr>
				<tr>
					<td>New Password</td>
					<td><input type="text" name="newpassword"></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="text" name="conpassword"></td>
				</tr>
				<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"><a href="Home.php">   Back<br></td>
				</tr>
			</table>
			</fieldset>
		</form>	
	
	
</body>
</html>