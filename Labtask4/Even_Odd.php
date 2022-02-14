<?php
	
if(isset($check))
{
	if($number%2==0)
	{
		echo "$True";
	}
	else
	{
		echo"$False";
	}
}

?>
<html>
	<head>
		<title>Even Odd</title>
	</head>
	<body>
		<form method="post">
		<table>
		<tr>
		<td>Enter a Number</td>
		<td><input type="text" name="number" value="" /></td>
		</tr>
		<td colspan="2" align="center">
			<input type="submit" value="Submit" name="check"/>
		</tr>
		</form>
	</body>
</html>
</html>