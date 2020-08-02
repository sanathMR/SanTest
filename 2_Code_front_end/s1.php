
<html>
<body>
<?php
   // connect to mongodb
   $uname=$_REQUEST['uname'];
   $m = new MongoClient();
	
   echo "Connection to database successfully";
   // select a database
   $db = $m->placement;
	
   echo "Database placement selected";
   
   $collection = $db->student2019;
   echo "Collection selected succsessfully";

   $cursor = $collection->find(( array('usn'=>$uname)));
   $count=0;
   //$value=$cursor[1];
  // echo $value;
 
  foreach ( $cursor as $document)
   {
	   $count++;
	  echo "<br/>";
	   echo $document["name"];
	   echo "--";
	     echo $document["usn"];
	   echo "<br/>";
	   echo $document["email"];
	   echo "<br/>";
	     echo $document["phno"];
	   echo "<br/>";
	     echo $document["branch"];
	   echo "<br/>";
	     echo $document["gender"];
	   echo "<br/>";
	     echo $document["dob"];
	   echo "<br/>";
	  print "<form onsubmit='return validate2()' action='s2.php'  method='post' align='left'>
	  <input type='hidden' name='uname' value=$uname />
 <input type='submit' value='See Academic Info'/>
 </form>";
   }
   echo $count;
   
 if($count==0)
 {
	 echo "invalid user";
	 import 'Flogin.html';
 }
 ?>
 </html>
</body>