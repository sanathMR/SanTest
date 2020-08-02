<?php
echo "<div class='zoom' >
	<a href='admin.html'> <img src='back2.png' height='60' width='60'> </a> 
 </div>";
error_reporting(0);

echo "<!DOCTYPE html>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' type='text/css' href='persona.css'>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
 <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script> 
 <style>
td {
        color: white;
		background-color: #006400;
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
.but{
	font-size:20px;
}

</style>
<body>";
echo "<h2 align='center' >Eligibility details !</h2>";
echo "<form action='elg1.php'><h2 align='center';
>Branch <select name='branch' class='but'><option>CSE</option><option>TCE</option><option>CIVIL</option><option>MECH</option><option>ECE</option><option>EEE</option><option>ISE</option></select>
<input type='submit' value='Filter' class='but' ></h2></form>";

		
$m = new MongoClient();
	$data ="<table class='table table-bordered' cellspacing='7' cellPadding='300px' align='center'>";
    
				
				$db = $m->placement;
		$collection = $db->book;
        $cursor = $collection->find();
		$data .= "<tr>";
		$data .= "<th align='left' >NO</th>";
		$data .= "<th align='left' >Company Name</th>";
		$data .= "<th align='left' >Cut Off</th>";
		$data .= "<th align='left' >Salary</th>";
		$data .= "<th align='left' >No of student Eligeble</th>";
		$data .= "</tr>"; 
		;
	foreach($cursor as $document)
	{
		$count=0;
		 $db1 = $m->placement;
        $collection1 = $db1->academic2019;
        $cursor1 = $collection1->find();
		$cutof=$document["cutof"];
		foreach($cursor1 as $document1)
		{
		
		$agre=$document1["agre"];
		$logs=$document1["logs"];
		if(($agre>=$cutof)&&($logs<=1))
		{
			$count++;
		}
		$c=$count/5.5;
		}
		$data .= "<tr >";
		$data .= "<th>" . $document["_id"] . "</th>";    
		$data .= "<td>" . $document["companies"]."</td>";

		$data .= "<td>" . $document["cutof"]."</td>";       
		$data .= "<td>" . $document["salary"]."</td>";
		if($c>75)
		{
			$color='#1aff1a';
		}
		elseif($c>50)
		{
			$color='#80ff80';
		}
		elseif($c>25)
		{
			$color='#ff8080';
		}
		else
		{
			$color='#ff0000';
		}
		
		$data .= "<td class='h'style='background-color:$color' >". $count ."</td>";
		$data .= "</tr>";  
	}

    $data .= "</table>";
		
		
        echo $data;

		
echo "
	</body>
	</html>";
	?>