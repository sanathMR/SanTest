<?php
   // connect to mongodb
   $m = new MongoClient();
	
   echo "Connection to database successfully";
   // select a database
   $db = $m->studentdb;
	
   echo "Database studentdb selected";
?>