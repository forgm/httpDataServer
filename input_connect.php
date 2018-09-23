<?php

	function Connection(){	
		$server="localhost";
		$user="user";
		$pass="pass";
		$db="db";
	   	
		$connection = new mysqli($server, $user, $pass, $db);
		if($connection->connect_errno > 0){
    			die('Unable to connect to database [' . $connection->connect_error . ']');
}
		return $connection;
	}
?>
