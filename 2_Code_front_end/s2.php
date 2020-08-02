
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
   
   $collection = $db->academic2019;
   echo "Collection selected succsessfully";

   $cursor = $collection->find(( array('usn'=>$uname)));
   $count=0;
   //$value=$cursor[1];
  // echo $value;
 
  foreach ( $cursor as $document)
   {
	   $count++;
	  echo "<br/>";
	   echo $document["usn"];
	   echo "--";
	     echo $document["sslc"];
	   echo "<br/>";
	   echo $document["puc"];
	   echo "<br/>";
	     echo $document["1st"];
	   echo "<br/>";
	     echo $document["2nd"];
	   echo "<br/>";
	     echo $document["3rd"];
	   echo "<br/>";
	    echo $document["4th"];
	   echo "<br/>";
	    echo $document["5th"];
	   echo "<br/>";
	    
	     echo $document["logs"];
	   echo "<br/>";
	   echo "Projected score is pridicted using ARTIFICIAL NEURAL NETWORK ";
	   echo $document["pr6th"];
	   echo "<br/>";
	  print "<form onsubmit='return validate2()' action='s2.php'  method='post' align='left'>
	  <input type='hidden' name='uname' value=$uname />
 <input type='submit' value='HOME'/>
 </form>";
   }
   echo $count;
   
 if($count==0)
 {
	 echo "invalid user";
 }
 ?>
 </html>
</body>