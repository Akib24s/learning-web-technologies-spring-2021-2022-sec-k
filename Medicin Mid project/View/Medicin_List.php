php 
	include('header.php');



html
head
	titleMedicin Listtitle
head
body

	a href=Menu.php Back a 
	a href=..controllerslogout.php logout a
	brbr
	fieldset
		legendMedicin Listlegend
		table border=1
			tr
				tdPaintd
				tdheadachetd
				tddentaltd
				tdTeethtd
				tdMalepaintd
				tdDiabetistd
				tdoraltd
				tdInjectiontd
				tdNeckactiontd
				tdACTIONtd
			tr

			php 
				$file = fopen('..ModelsMedicin_List.txt', 'r');
				
				while (!feof($file)) {
					$suser = fgets($file);
					if($suser == null){
						break;
					}
					
					$userArray = explode(, $suser);
			

			tr
				td=$userArray[0]td
				td=$userArray[1]td
				td=$userArray[2]td
				td=$userArray[3]td
				td=$userArray[4]td
				td=$userArray[5]td
				td=$userArray[6]td
				td=$userArray[7]td
				td=$userArray[8]td
				td
					a href=edit.phpid==$userArray[0] EDIT a  
					a href=delete.phpid==$userArray[0] DELETE a  
				td
			tr
	php
	}
	
		table
		fieldset
	form
	body
html