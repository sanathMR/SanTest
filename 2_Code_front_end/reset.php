<?php
$python="python";
include 'admin.html';

$command = $python.' C:\\xampp\\htdocs\\Project\\reset.py';
#$output = shell_exec($command);
$o=`$command`;
echo "<h1 align='center' >predicted results reset successfull</h1>";



?>