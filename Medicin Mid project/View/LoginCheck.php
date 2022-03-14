<?php 
	session_start();

	if(isset($_REQUEST['submit'])){
		
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		if($username != null && $password != null){
			

			$file = fopen('../Models/List.txt', 'r');
			while(!feof($file)){

				$user = fgets($file);
				$userArray = explode('|', $user);
				
				if(trim($userArray[2]) == $username && trim($userArray[3]) == $password)
				{
					$_SESSION['status'] = true;
					$_SESSION['current_user'] = $userArray;
					setcookie('status', 'true', time()+3600, '/');

					header('location: ../Views/Menu.php');
				}
			}

			echo "invalid username/password";
			


		}else{
			echo "null submission";
		}
	}
?>