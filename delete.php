<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<style type="text/css">
<!--
.titr {
	color: #FFF;
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 12px;
	font-weight:normal;
}
body {
	background-color: #CCC;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
	font-family: Tahoma, Geneva, sans-serif;
}
-->
</style>
</head>

<body>













  <table width="100" border="0" align="center">
    <tr>
      <th bgcolor="#CC0000" scope="col"  style="border:1px dotted #000">Delete</th>
    </tr>
  </table>
  <br />
</div>
<form action="" method="post">
<table width="543" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <th width="258" align="center" valign="top" bgcolor="#333333" scope="col"><table width="327" border="0" align="center" cellpadding="1"  bgcolor="#000000"cellspacing="1">
      <tr>
        <td height="30" colspan="2" align="center" bgcolor="#003366" class="titr">حذف کردن نام تیتر اخبار</td>
        </tr>
     <? 
		  include('config.php');  
		$sql = mysql_query ('select * from news order by id desc  '); 
		$fetch = mysql_fetch_assoc($sql);
		$i = 0;
		do{ 
		$i++;
		echo '<tr align="center">
        <td width="24" height="34" bgcolor="#666666"><input type="checkbox" name="checkbox_'.$i.'" id="button" value="'.$fetch['id'].'" /></td>
        <td width="296" bgcolor="#666666"><strong>'.$fetch['title']. '</strong></td></tr>';
		}while ($fetch = mysql_fetch_assoc($sql));
	 
	 
		?>
      </table> </th>
    <th width="259" align="center" valign="top" bgcolor="#333333" scope="col"><table width="318" height="67" border="0" align="center" cellpadding="1"cellspacing="1"  bgcolor="#000000">
      <tr>
        <td width="260" height="30" align="center" bgcolor="#003366" class="titr">حذف کردن نام نرم افزار</td>
      </tr>
      <tr align="center">
        <td height="30" bgcolor="#666666"><? 
		  include('config.php');  
		$sql = mysql_query ('select * from softwarenames order by id desc  '); 
		$fetch = mysql_fetch_assoc($sql);
		do{ 
		echo '<strong>'.$fetch['name']. '</strong><br /><hr/>';
		}while ($fetch = mysql_fetch_assoc($sql));
	 
	 
		?></td>
      </tr>
      </table></th>
    </tr>
  <tr>
    <th colspan="2" bgcolor="#333333" scope="row">&nbsp;</th>
    </tr>
</table> 

 
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="450" border="0" align="center">
  <tr>
    <th width="199" bgcolor="#FFFFFF" scope="col"><a href="index.php">بازگشت به صفحه اصلی</a></th>
    <th width="195" bgcolor="#FFFFFF" scope="col"><a href="cont.php">بازگشت به کنترل پنل</a></th>
    </tr>
</table>
 >

</form>
<? mysql_close($db_con); ?>
</body>
</html>
</body>
</html>
</body>
</html>