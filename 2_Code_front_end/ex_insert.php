<html>

<head>
<title> JNNCE </title>
</head>

<style type="text/css">

body {
      background-color:white;
     }

h1 {
    text-align:center;font-family:AR CHRISTY;
    background-image:url(main3.jpg);
   color:white;
   letter-spacing:10px;
   font-size:400%;
   font-weight:bolder;
   margin:0.1in;
   padding:0in;
   }

img.i1 {float:left}

 th {
   text-align:center;font-family:Arial Black;
   background-image:url(main3.jpg);
   color:white;
   letter-spacing:0px;
   font-size:200%;
   font-weight:bolder;
   }
a {
    align:center;
    background-color:;
  color:white;
   letter-spacing:0px;
   font-size:200%;

}

td { text-align:center;
    color:white;
font-weight:bolder;
font-size:150%;
border-style:double;
padding:0.2in;
background-image:url(main3.jpg);
}



</style>

<body>

<img class="i1" src="pen3.png" height="20%" width="15%" />
<h1>Pen Bazaar</h1>

<?php  
 
$id=$_POST['t1'];  
 $name=$_POST['t2'];
   $type=$_POST['t3'];
   $ink=$_POST['t4'];  
 $prize=$_POST['t5'];
 $iname=$_POST['t6'];   
$con=mysqli_connect("localhost","root","","PEN");   $result=mysqli_query($con,"insert into pen1 values('$id','$name','$type','$ink','$prize','$iname')"); 
      if(!$result)   
{
      print "could not insert";
      exit;
    
}
   print "<h3>record inserted</h3>"; 
 $res=mysqli_query($con,"select * from pen1"); 
  print "<table border=2pt align=center>  
<tr>
   <th> Id </th>  
 <th> Name </th>
   <th> Type </th>   
<th> Ink </th>  
<th> Prize </th>
<th> Image </th>
</tr>";
  while($row=mysqli_fetch_row($res))  
 {        $id=$row[0];
        $name=$row[1];
        $type=$row[2];
        $ink=$row[3];  
     $prize=$row[4];
     $iname=$row[5];
    print "<tr>      
   <td> $id </td>  
       <td>"; echo '<a href="order.php?value_key='.$id.'">'.$name.'</a>'; print "</td>     
    <td> $type</td>
  <td> $ink </td>
<td> $prize </td>
<td>"; echo '<a href="order.php?value_key='.$id.'"><img src="'.$iname.'" height="200" width="600"/></a>'; 
print "</td>   
 </tr>";   
} 
print "</table>";


  ?> 

</body>

</html>