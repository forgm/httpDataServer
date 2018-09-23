<?php

   	include("input_connect.php");
   	$link=Connection();
	  

	$query = "INSERT INTO tempLog (temperature, humidity) VALUES ('".$_GET ["temp1"]."', '".$_GET ["hum1"]."')"; 
   	
  
	 

  if (mysqli_query($link, $query) === TRUE) {
    echo "New record created successfully";
} 
  else {
    echo "Error: " . $query . "<br>" . $link->error;
    mysqli_query($link, $query);
  }
  mysqli_close($link);
  header("Location: input_index.php");
  die();
?>
