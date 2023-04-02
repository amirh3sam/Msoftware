<?php
// Change this parameter with your connection's info.
$db_host="localhost";
$db_name="loginform";
$username="root";
$password="";
$db_con=mysql_connect($db_host,$username,$password);
$connection_string=mysql_select_db($db_name,$db_con);
mysql_query('SET NAMES utf8'); 
mysql_set_charset('utf8',$db_con); 

?>