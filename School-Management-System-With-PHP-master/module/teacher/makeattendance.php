<?php
include_once('index.php');
include_once('main.php');
$atten=$_REQUEST['attendance'];
//print_r($_REQUEST);
 $d=date("Y-m-d");
//$conn=mysqli_connect('localhost','root','');
if(!$link){
   die('error connecting ');
   }
   mysqli_select_db($link,'schoolmanagementsystemdb');
  
   foreach($atten as $a)
   {
	   
	   $sql="insert into attendance(date,attendedid) values('$d','$a')";
	   mysql_query($link,$sql);
   }
   
   
   
   
   
  


  

?>
<html>
 <center>
 <h4>Attendance Successfully.</h4>
  <p>go home page.click Home button.<p>
 </center>
</html>