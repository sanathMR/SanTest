<!DOCTYPE html>
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
        $coll = $db->student2019;
        $document = $coll->findOne(array('usn' => $uname));
		$name=$document["name"];
			echo "<h1 align='center' style='background-color:white'> Display the information of $name </h1>";
      
        $collection = $db->academic2019;
        $document = $collection->findOne(array('usn' => $uname));

    $data .= "<tr>";
    $data .= "<th align='left' >usn</th>";
	$data .= "<td>" . $document["usn"] . "</td>";
	$data .= "</tr>";       
        
    $data .= "<tr>";   
    $data .= "<th align='left' >SSLC</th>";
	$data .= "<td>" . $document["sslc"]."</td>";
    $data .= "</tr>";       
    
	$data .= "<tr>";      
    $data .= "<th align='left' >PUC</th>";
	 $data .= "<td>" . $document["puc"]."</td>";
    $data .= "</tr>";       
      
	$data .= "<tr>";
    $data .= "<th align='left' >First sem</th>";
	$data .= "<td>" . $document["1st"]."</td>";
    $data .= "</tr>";  
	
	$data .= "<tr>";
    $data .= "<th align='left' >Second sem</th>";
	$data .= "<td>" . $document["2nd"]."</td>";
    $data .= "</tr>";
	
	$data .= "<tr>";
    $data .= "<th align='left' >Third sem</th>";
	$data .= "<td>" . $document["3rd"]."</td>";
    $data .= "</tr>";	
        
	$data .= "<tr>";
    $data .= "<th align='left' >Fourth sem</th>";
	$data .= "<td>" . $document["4th"]."</td>";
    $data .= "</tr>";
	
	$data .= "<tr>";
    $data .= "<th align='left' >Fifth sem</th>";
	$data .= "<td>" . $document["5th"]."</td>";
    $data .= "</tr>";
	
	$data .= "<tr>";
    $data .= "<th align='left' >logs</th>";
	$data .= "<td>" . $document["logs"]."</td>";
    $data .= "</tr>";
	
	$data .= "<tr>";
    $data .= "<th align='left' >Predicted sixth sem cgpa using ANN</th>";
	$color="#006400";
	$data .= "<td style='color:$color' >" . $document["prann"]."</td>";
    $data .= "</tr>";
	
	$data .= "<tr>";
    $data .= "<th align='left' >Predicted sixth sem cgpa using CONVENTIONAL Algorithem</th>";
	
	$data .= "<td style='color:$color' >" . $document["prcon"]."</td>";
    $data .= "</tr>";
        $data .= "</table>";
		
		
        echo $data;
		
		echo "<h4 align='center' >Note:<i>Predicted cgpa may not be accurate, dont be panic</i></h4>";
		echo "<h4 align='center' ><a href='test1.php?uname=$uname'>SEE WHAT HAPPENS IF PREDICTION IS TRUE</a></h4>";
		
?>
	</body>
	</html>
	