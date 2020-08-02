<?php
     
   $usn=$_POST['usn'];
   $name=$_POST['name'];
   $email=$_POST['email'];
   $phno=$_POST['phno'];
   $branch=$_POST['branch'];
   $gender=$_POST['gender'];
   $dob=$_POST['dob'];
   $usn=strtoupper($usn);
   $name=strtoupper($name);
   
   include 'admin.html';
   $m = new MongoClient();
   
   $db = $m->placement;
   $collection1 = $db->student2019;
   try{
   $cursor1 = $collection1->insert(( array('_id'=>$usn,'usn'=>$usn,'name'=>$name,'email'=>$email,'phno'=>$phno,'branch'=>$branch,'gender'=>$gender,'dob'=>$dob)));
    $collection2 = $db->login;
	$collection3 = $db->academic2019;
    $cursor3 = $collection3->insert(( array('_id'=>$usn,'usn'=>$usn,'sslc'=>'0','puc'=>'0','1st'=>'0','2nd'=>'0','3rd'=>'0','4th'=>'0','5th'=>'0','logs'=>'0','agre'=>'0')));

     $cursor2 = $collection2->insert(( array('_id'=>$usn,'uname'=>$usn,'password'=>$name)));
	 echo "<h1 align='center'> Student with usn : " .$usn . "inserted </h1>";
   }
   catch (Exception $e) {
    echo "<h1 align='center'>Duplicate USN not allowed USN : " .$usn . " already exists </h1>";
}

   $count=0;

?>