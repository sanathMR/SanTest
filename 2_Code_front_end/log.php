<?php
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
        $collection = $db->login;
        $cursor = $collection->find();
		 $data .= "<tr>";
		  $data .= "<th>_id</th>";
		   $data .= "<th>uname</th>";
		   $data .= "<th>passwors</th>";
		   
		   	$data .= "</tr>";
		foreach($cursor as $document)
		{
   
  $data .= "<tr>";
  $data .= "<td>" . $document["_id"] . "</td>";
	$data .= "<td>" . $document["uname"] . "</td>";
       
        
  
 
	$data .= "<td>" . $document["password"]."</td>";
      

$data .= "</tr>";
		}
        $data .= "</table>";
        echo $data;
		
echo "
	</body>
	</html>";
	
 ?>