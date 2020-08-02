<?php
error_reporting(0);
echo "<!DOCTYPE html>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' type='text/css' href='persona.css'>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
 <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<body>";
$m = new MongoClient();
echo "<div class='zoom' >
	  <a href='admin.html'> <img src='back2.png' height='60' width='60'> </a> 
      </div>";
	$data ="<table class='table table-bordered' align='center'>";
    
       $db = $m->placement;
        $collection = $db->academic2019;
        $cursor = $collection->find();
		 $data .= "<tr>";
		  $data .= "<th>Usn</th>";
		   $data .= "<th>Sslc</th>";
		   $data .= "<th>Puc</th>";
		   $data .= "<th>1st</th>";
		$data .= "<th>2nd</th>";
		 $data .= "<th>3rd</th>";
		$data .= "<th>4th</th>";
		$data .= "<th>5th</th>";
		$data .= "<th>Logs</th>";
		$data .= "<th>Predicted using ANN</th>";
		$data .= "<th>Predicted using Conventional method</th>";
		   
		   	$data .= "</tr>";
		foreach($cursor as $document)
		{
   
  $data .= "<tr>";
	$data .= "<td>" . $document["usn"] . "</td>";
       
        
  
 
	$data .= "<td>" . $document["sslc"]."</td>";
      
    
     
    
	 $data .= "<td>" . $document["puc"]."</td>";
    
      


	$data .= "<td>" . $document["1st"]."</td>";
 
	
	
    
	$data .= "<td>" . $document["2nd"]."</td>";

	

   
	$data .= "<td>" . $document["3rd"]."</td>";
	
        


	$data .= "<td>" . $document["4th"]."</td>";
	$data .= "<td>" . $document["5th"]."</td>";
	$data .= "<td>" . $document["logs"]."</td>";
	$data .= "<td>" . $document["prann"]."</td>";
	$data .= "<td>" . $document["prcon"]."</td>";
$data .= "</tr>";
		}
        $data .= "</table>";
        echo $data;
		
echo "
	</body>
	</html>";
	
 ?>