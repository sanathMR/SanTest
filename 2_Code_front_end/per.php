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
        $collection = $db->student2019;
        $cursor = $collection->find();
		 $data .= "<tr>";
		  $data .= "<th>Name</th>";
		   $data .= "<th>USN</th>";
		   $data .= "<th>Email</th>";
		   $data .= "<th>Phno</th>";
		$data .= "<th>Branch</th>";
		 $data .= "<th>Gender</th>";
		$data .= "<th>DOB</th>";
		   
		   	$data .= "</tr>";
		foreach($cursor as $document)
		{
   
  $data .= "<tr>";
	$data .= "<td>" . $document["name"] . "</td>";
       
        
  
 
	$data .= "<td>" . $document["usn"]."</td>";
      
    
     
    
	 $data .= "<td>" . $document["email"]."</td>";
    
      


	$data .= "<td>" . $document["phno"]."</td>";
 
	
	
    
	$data .= "<td>" . $document["branch"]."</td>";

	

   
	$data .= "<td>" . $document["gender"]."</td>";
	
        


	$data .= "<td>" . $document["dob"]."</td>";
$data .= "</tr>";
		}
        $data .= "</table>";
        echo $data;
		
echo "
	</body>
	</html>";
	
 ?>