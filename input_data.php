<?php
  include("input_connect.php");
  $link = Connection();
  $result=mysqli_query($link, "SELECT `timeStamp`, `temperature`, `humidity` FROM `tempLog` ORDER BY `timeStamp` DESC");
  $data = array();
  while($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
  }
  $result -> close();
  $link -> close(); 
  $json_table = json_encode($data);
  echo $json_table;
  file_put_contents("input_data.json", $json_table, $flags = null, $context = null);
      echo $json_table;      	
?>