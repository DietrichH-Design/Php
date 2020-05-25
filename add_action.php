<?php
 //echo "Add Action Page"; 
 //Get Values from UI
 echo $first_name=$POST['first_name'];
 echo $last_name=$POST['last_name'];
 //connect database
 $conn=mysql('DESKTOP-8SRBA6N\LOCALHOST','root','') or die(mysql_error());
 
?>