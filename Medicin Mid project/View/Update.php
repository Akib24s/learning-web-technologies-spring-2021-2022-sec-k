<?php 
	session_start();
	
	if(isset($_REQUEST['update'])){
		
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$gender = $_REQUEST['gender'];
		$dob = $_REQUEST['dob'];
		

		if( $name != null && $email != null && $username != null && $password != null && $clas != null && $gender != null && $dob != null){
			
			$file = fopen('../Models/StudentList.txt', 'r');
			$updatedContent = "";

			while(!feof($file)){
				$line = fgets($file);
				$suser = explode('|', $line);
				
				if($suser[0] == $id){
					$line = $name."|".$email."|".$username."|".$password."|".$clas."|".$gender."|".$dob."\r\n";
					//$updatedContent .= $line;
				}
				$updatedContent .= $line;
				
			}

			$file = fopen('../Models/StudentList.txt', 'w');
			fwrite($file, $updatedContent);
			header('location: ../Views/StudentList.php');

		}else{
			echo "null submission";
		}
	}
?>