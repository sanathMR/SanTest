<?php
$python="C:\\Users\\Raju\\Anaconda3\\pkgs\\python-3.6.3-h9e2ca53_1\\python.exe";
$se=$_REQUEST['se'];
$uname=$_REQUEST['uname'];
$m = new MongoClient();
 $db = $m->placement;
 $collection = $db->login;
 $cursor = $collection->find(( array('uname'=>$uname)));
  
  foreach ( $cursor as $document)
   {
	  
	  $password=$document["password"];
   }
   
   $m = new MongoClient();
 $db = $m->placement;
 $collection = $db->student2019;
 $cursor = $collection->find(( array('usn'=>$uname)));
  foreach ( $cursor as $document)
  {  
if($se=='email')
{
 $email=$document["email"];
//echo shell_exec("python C:\\xampp\\htdocs\\Project\\email.py"+" "+$email+" "+$password);
$command = $python.' C:\\xampp\\htdocs\\project\\eotp.py '.$email." ".$password;
$output = shell_exec($command);
$o=`$command`;
echo "Password has been sent to your Email  :  ";
echo $email;
include 'Flogin.html';
/*
echo $o;
echo $command;*/
echo "Password has been sent to your Email  :  ";
echo $email;
}
if($se=='phno')
{
 $phno=$document["phno"];
echo shell_exec("python C:\\xampp\\htdocs\\Project\\phno.py"+" "+$phno+" "+$password);
echo "Password has been sent to your phone noumber ===> ";
echo $phno;
}

}

?>