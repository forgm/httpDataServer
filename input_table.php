<?php
   include("input_connect.php");
   $link = Connection();	
?>

<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sensor Data</title> 
    <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
  </head>

<body>
 <div id="chart_div"></div>
	   <h1>Temperature / moisture sensor readings</h1>
 
   <table border="1" cellspacing="1" cellpadding="1">
		<tr>
			<td>&nbsp;Timestamp&nbsp;</td>
			<td>&nbsp;Temperature 1&nbsp;</td>
			<td>&nbsp;Moisture 1&nbsp;</td>
		</tr>

      <?php 
      	$result=mysqli_query($link, "SELECT * FROM `tempLog` ORDER BY `timeStamp` DESC");
			if($result!==FALSE){
		  		while($row = mysqli_fetch_array($result)) {
		      	printf("<tr><td> &nbsp;%s </td><td> &nbsp;%s&nbsp; </td><td> &nbsp;%s&nbsp; </td></tr>", 
		      	$row["timeStamp"], $row["temperature"], $row["humidity"]);
		     	}
		     	mysqli_free_result($result);
		     	mysqli_close($link);
		    	 
		 	 }
		?>        
   </table>


</body>
</html>

