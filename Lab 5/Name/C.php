<?php
$name = "";
$nameError = " ";

if(isset($_REQUEST['submit']))
{
	if($_REQUEST['name'] == null)
	{
		$nameError = "Email box is Empty....";
	}
	else
	{
		$name = $_REQUEST['name'];

	}

}

?>


<html>
<head>
	<title></title>
</head>
<body>
 	<form method="POST" action="#">
 		Name <br> 
 		<input type="text" name="name" value="<?=$name?>"/> <br>
 		
 		<td><?=$nameError?></td>

		<hr style="width:50%;text-align:left;margin-left:0">

 		<input type="submit" name="submit" value="Submit">
 		<br>
 		<br>

 		<td><?=$name?></td>

</body>
</html>