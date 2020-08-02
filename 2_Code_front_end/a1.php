
<html>
<body>
<?php
  
   $uname=$_REQUEST['uname'];
   $password=$_REQUEST['password'];
   $usn=$_REQUEST['usn'];
   $name=$_REQUEST['name'];
   $email=$_REQUEST['email'];
   $phno=$_REQUEST['phno'];
   $branch=$_REQUEST['branch'];
   $gender=$_REQUEST['gender'];
   $dob=$_REQUEST['dob'];
   
   
   $m = new MongoClient();
   $db = $m->placement;
   $collection1 = $db->student2019;

   $cursor1 = $collection1->insert(( array('usn'=>$usn,'name'=>$name,'email'=>$email,'phno'=>$phno,'branch'=>$branch,'gender'=>$gender,'dob'=>'dob')));
    $collection2 = $db->login;
     $cursor2 = $collection2->insert(( array('uname'=>$usn,'password'=>$name)));
   $count=0;

 ?>
 </html>
</body>