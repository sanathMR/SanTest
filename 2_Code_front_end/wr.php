<?php
$myfile = fopen("C:\Users\Raju\Desktop\project\gate.txt", "w");
include 'admin.html';
fwrite($myfile, "1");
fclose($myfile);
echo "<h1 align='center'>Prediction using trained neural network SUCCESSFULL<h1>";
?>