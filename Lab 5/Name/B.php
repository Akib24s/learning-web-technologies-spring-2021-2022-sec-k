<?php
$name = "";

if(isset($_REQUEST['submit']))
{
	if($_REQUEST['name'] == null)
	{
		$name = "Name is Empty....";
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
 		<input type="text" name="name" value=""/>
 		 <br>
 		

		<hr style="width:50%;text-align:left;margin-left:0">

 		<input type="submit" name="submit" value="Submit">
 		<br>
 		<br>

 		<td><?=$name?></td>

</body>
</html>