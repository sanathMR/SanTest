<?php
$uname=$_REQUEST['uname'];

echo "<!DOCTYPE html>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' type='text/css' href='persona.css'>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
 <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script> 
 <style>
td {
        color: white;
}
th {
        background-color: #cc0000;
		color:white;
		font-size:20px;
}
h2 {
	
        color:darkgreen;
		letter-spacing:10px;
		font-size:30px;
}
h3 {
	align:left;
        color:darkgreen;
		font-size:20px;
}
 body{
	background-image:url(jnnce.jpg);
	background-size:cover;
}

</style>
<body>";

		
$m = new MongoClient();
	$data ="<table class='table table-bordered' cellspacing='7' cellPadding='300px' align='center'>";
    
       $db = $m->placement;
        $collection = $db->academic2019;
        $document = $collection->findOne(array('usn' => $uname));
				$agre=$document["agre"];
		$logs=$document["logs"];
				echo "<h2 align='center' >According to our prediction your Eligebility</h2>";
				$data .="<caption><h3>Predicted Agregate : ". $agre ."</h3></caption>";
		$collection = $db->book;
        $cursor = $collection->find();
		$color='white';
		$data .= "<tr style='background-color:$color'>";
		$data .= "<th align='left' >NO</th>";
		$data .= "<th align='left' >Company Name</th>";
		$data .= "<th align='left' >Cut Off</th>";
		$data .= "<th align='left' >Salary</th>";
		$data .= "<th align='left' >Eligebility</th>";
		$data .= "</tr>"; 
	foreach($cursor as $document)
	{
		$cutof=$document["cutof"];
		if(($agre>=$cutof)&&($logs<=1))
		{
			$elg="Eligible";
			$color="#4dff4d";
		}
		else
		{
			$elg="Not Eligible";
			$color="#ff4d4d";
		}
		$data .= "<tr style='background-color:$color'>";
		$data .= "<td style='background-color:#cc0000'>" . $document["_id"] . "</td>";    
		$data .= "<td>" . $document["companies"]."</td>";

		$data .= "<td>" . $document["cutof"]."</td>";       
		$data .= "<td>" . $document["salary"]."</td>";
		
		$data .= "<td>".$elg."</td>";
		$data .= "</tr>";  
	}

    $data .= "</table>";
		
		
        echo $data;

		
echo "
	</body>
	</html>";
	
 ?>