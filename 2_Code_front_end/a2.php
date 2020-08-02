
<html>
<body>
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
   
   
   $m = new MongoClient();
   $db = $m->placement;
   $collection1 = $db->academic2019;

   $cursor1 = $collection1->insert(( array('usn'=>$usn,'sslc'=>$sslc,'puc'=>$email,'1st'=>$_1st,'2nd'=>$_2nd,'3rd'=>$_3rd,'4th'=>$_4th,'5th'=>$_5th,'logs'=>$logs,'6th'=>'0')));

 

 ?>
 </html>
</body>