<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EnterUser</title>
</head>

<body>
 
<?
 include('config.php');
$sql = mysql_query ('select * from users where name = "'.$name.'"');
$fetch = mysql_fetch_assoc($sql);
echo 'hi'.$fetch['name'].'<br /><br />';
        
mysql_close($db_con);
?>
 
<table width="800" border="0" align="center" cellpadding= "0" cellspacing="0">
  <tr>
    <th height="100" bgcolor="#003366" scope="col">WelCome User</th>
  </tr>
</table>

</body>
</html>