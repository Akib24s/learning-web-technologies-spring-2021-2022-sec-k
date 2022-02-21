<?php
$email = "";
$emailError="";

if(isset($_REQUEST['submit']))
{
	if($_REQUEST['email'] == null)
	{
		$emailError = "Email is Empty....";
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
 		<input type="email" name="email" value="<?=$email?>"/> <br>
 		<td><?=$emailError?></td>

		<hr style="width:50%;text-align:left;margin-left:0">

 		<input type="submit" name="submit" value="Submit">

 		<br>
 		<br>

 		<td><?=$email?></td>
</body>
</html>