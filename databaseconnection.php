<?php
	
	$connection = mysqli_connect('localhost', 'root', '', 'rmh');
	if($connection){
		echo "";
	}else{
		echo "Connection Failed";
	}		
?>

