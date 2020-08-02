<?php
   // connect to mongodb
   $uname=$_REQUEST['uname'];
    $password=$_REQUEST['password'];
   $m = new MongoClient();
	
   // select a database
   $db = $m->placement;
	

   
   $collection = $db->login;
   $collection1 = $db->student2019;

   $cursor = $collection->find(( array('uname'=>$uname,'password'=>$password)));
   $document1 = $collection1->findone(( array('usn'=>$uname)));
   //foreach ( $cursor1 as $document1)
   //{
	 $name=$document1['name'];
   //}
  
   $count=0;
   //$value=$cursor[1];
  // echo $value;
 
  foreach ( $cursor as $document)
   {
	   $count++;
   }
 
if(($count!=0) && (!strcmp($uname,"ADMIN")))
{
	include 'admin.html';
}	
 elseif($count==0)
 {
	 echo "  Invalid user";
	 include 'Flogin.html';
 }
 else
 {
	 include 'index.html';
 }
 ?>

