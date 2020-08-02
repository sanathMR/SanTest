<?php
     
  $usn=$_REQUEST['usn'];
   $sslc=$_REQUEST['sslc'];
   $puc=$_REQUEST['puc'];
   $_1st=$_REQUEST['1st'];
   $_2nd=$_REQUEST['2nd'];
   $_3rd=$_REQUEST['3rd'];
   $_4th=$_REQUEST['4th'];
   $_5th=$_REQUEST['5th'];
   $logs=$_REQUEST['logs'];
   $usn=strtoupper($usn);
   $sslc=floatval($sslc);
   $puc=floatval($puc);
   $_1st=floatval($_1st);
   $_2nd=floatval($_2nd);
   $_3rd=floatval($_3rd);
   $_4th=floatval($_4th);
   $_5th=floatval($_5th);
   $logs=intval($logs);
 
   
   
   
   $m = new MongoClient();
   $db = $m->placement;
   $collection1 = $db->academic2019;
   $collection2 = $db->student2019;
   $count=0;
    $cursor = $collection2->find(( array('usn'=>$usn)));
	 foreach ( $cursor as $document)
   {
	   $count++;
   }
   if($count!=0)
   {

$collection1->update(array("usn"=>$usn), 
      array('$set'=>array("sslc"=>$sslc,"puc"=>$puc,"1st" => $_1st,"2nd" => $_2nd,"3rd" => $_3rd,"4th" => $_4th,"5th" => $_5th,"logs" => $logs)));
    

 
   
   include 'admin.html';
   echo "<h1 align='center' > Academic details updated for USN ". $usn ."</h1>";
   }
   else
   {
	   include 'admin.html';
	  echo "<h1 align='center' > Student not found with USN ". $usn ."</h1>";
   }

?>