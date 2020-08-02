<?php
$python="python";
include 'admin.html';

$command = $python.' C:\\xampp\\htdocs\\Project\\fetch.py';
$output = shell_exec($command);
$o=`$command`;
	echo "<h2 align='center' >Prediction Successfull</h2>";


?>