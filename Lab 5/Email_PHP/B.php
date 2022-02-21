<?php
$email = "";

if(isset($_REQUEST['submit']))
{
	if($_REQUEST['email'] == null)
	{
		$email = "Email is Empty....";
	}
	else
	{
		$email = $_REQUEST['email'];

	}

}

?>

<html>
<head>
	<title></title>
</head>
<body>
 	<form method="POST" action="">
 		Email <br> 
 		<input type="email" name="email" value=""/> <br>

		<hr style="width:50%;text-align:left;margin-left:0">

 		<input type="submit" name="submit" value="Submit">

 		<br>
 		<br>

 		<td><?=$email?></td>
</body>
</html>