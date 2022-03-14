<?php 
	include('header.php');
?>


<html>
<head>
	<title>Message List</title>
</head>
<body>

	<a href="Suport.php"> Back </a> |
	<a href="../controllers/logout.php"> logout </a>
	<br><br>
	<fieldset>
		<legend>Message List</legend>
		<table border="1">
			<tr>
				
				<td>Email</td>
				<td>Message</td>
				
				<td>ACTION</td>
			</tr>

			<?php 
				$file = fopen('../Models/Message.txt', 'r');
				
				while (!feof($file)) {
					$user = fgets($file);
					if($user == null){
						break;
					}
					
					$userArray = explode("|", $user);
			?>

			<tr>
				<td><?=$userArray[0]?></td>
				<td><?=$userArray[1]?></td>
				<td><?=$userArray[2]?></td>
				
				
			</tr>
	<?php
	}
	?>
		</table>
		</fieldset>
	</form>
	</body>
</html>