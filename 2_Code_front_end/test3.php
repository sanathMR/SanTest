<!DOCTYPE html>
<head>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' type='text/css' href='persona.css'>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
 <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
 </head>
 <style>
 body{
	background-image:url(jnnce.jpg);
	background-size:cover;
}
</style>
<body>
<?php
$uname=$_REQUEST['uname'];
$m = new MongoClient();

	$data ="<table class='table table-bordered' align='center'>";
    
       $db = $m->placement;
        $collection = $db->student2019;
        $document = $collection->findOne(array('usn' => $uname));
		$name=$document["name"];
		echo "<h1 align='center' style='background-color:white'> Display the information of $name </h1>";
    $data .= "<tr>";
    $data .= "<th>name</th>";
	$data .= "<td>" . $document["name"] . "</td>";
	$data .= "</tr>";       
        
    $data .= "<tr>";   
    $data .= "<th>usn</th>";
	$data .= "<td>" . $document["usn"]."</td>";
    $data .= "</tr>";       
    
	$data .= "<tr>";      
    $data .= "<th>email</th>";
	 $data .= "<td>" . $document["email"]."</td>";
    $data .= "</tr>";       
      
	$data .= "<tr>";
    $data .= "<th>phno</th>";
	$data .= "<td>" . $document["phno"]."</td>";
    $data .= "</tr>";  
	
	$data .= "<tr>";
    $data .= "<th>branch</th>";
	$data .= "<td>" . $document["branch"]."</td>";
    $data .= "</tr>";
	
	$data .= "<tr>";
    $data .= "<th>gender</th>";
	$data .= "<td>" . $document["gender"]."</td>";
    $data .= "</tr>";	
        
	$data .= "<tr>";
    $data .= "<th>dob</th>";
	$data .= "<td>" . $document["dob"]."</td>";
    $data .= "</tr>";
        $data .= "</table>";
        echo $data;
		?>
	</body>
	</html>
	
