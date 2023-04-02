<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
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
}
.a {
	color: #FFF;
}
.a {
	color: #FFF;
	font-family: Verdana, Geneva, sans-serif;
}
.text {
	font-family: Tahoma, Geneva, sans-serif;
}
-->
</style></head>

<body>
<? 
//////////////////////////////////////////////////////////////////////////////////////////
///							Insert  to Software and news								//
/////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////insert softwarename//////////////////////////////////////
$insertsoft = $_POST['insertsoft'];

 
if($insertsoft) {
	$software = $_POST['softwarefield'];


	if(!$software ) $message_reg = '<font color="red">خطا ! کادر خالی می باشد</font>.<br><br>';	
	else {
		include('config.php');
		$sql = mysql_query('select * from softwarenames where name = "'.$software.'" ');
		$count = mysql_num_rows($sql);
		echo mysql_error();
		if($count) $message_reg = '<font color="red">این نام قبلا ثبت شده است.</font>.<br><br>';
		else {
			$sql = mysql_query('insert into softwarenames (name) values ( "'.$software.'")');	
				if($sql) {
			?>  <script  language="javascript" >
           alert (" <?= "با موقیت اضافه شد "  ?>");
          </script> 
           <?	
			}
			else $message_reg = '<font color="red">خطا! مشکلی وجود دارد. </font>.<br><br>';
		}
		
		mysql_close($db_con);
	}
}
////////////////////////////////////////////////////////insert news (title,body)////////////////////////////
$insertnews = $_POST['insertnews'];

 
if($insertnews) {
	$title = $_POST['titlefield'];
    $body = $_POST['bodyarea'];
	if(!$title || !$body) $message_reg = '<font color="red">خطا ! یک یا هر دو کادر خالی می باشد</font>.<br><br>';	
	else {
		include('config.php');
		$sql = mysql_query('select * from news where title = "'.$title.'" ');
		$count = mysql_num_rows($sql);
		echo mysql_error();
		if($count) $message_reg = '<font color="red">این نام قبلا ثبت شده است.</font>.<br><br>';
		else {
			$sql = mysql_query('insert into news (title,body) values ( "'.$title.'","'.$body.'")');	
			if($sql) {
			?>  <script  language="javascript" >
           alert (" <?= "با موقیت اضافه شد "  ?>");
          </script> 
           <?	
			}
			else $message_reg = '<font color="red">خطا! مشکلی وجود دارد. </font>.<br><br>';
		}
		
		mysql_close($db_con);
	}
}

?>
<div  align="center">
  <? if($message_reg) echo $message_reg; ;?>

 

  <table width="100" border="0" align="center">
    <tr>
      <th bgcolor="#99FF00" scope="col">INSERT</th>
    </tr>
  </table>
  <br />
</div>
<form action="" method="post">
<table width="543" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <th width="517" bgcolor="#333333" scope="col"><table width="400" border="0" align="center" cellpadding="1"  bgcolor="#000000"cellspacing="1">
      <tr>
        <td align="center" bgcolor="#003366"><span class="a"> افزودن اسم نرم افزار</span></td>
        </tr>
      <tr align="center">
        <td bgcolor="#666666"><input type="text" name="softwarefield" id="textfield" /></td>
        </tr>
      <tr>
        <td align="center" bgcolor="#666666"><input type="submit" style="font:Tahoma, Geneva, sans-serif" name="insertsoft" id="button2" value="اضافه شدن نام نرم افزار" /></td>
        </tr>
    </table><hr /></th>
    </tr>
  <tr>
    <th bgcolor="#333333" scope="row"><table width="416" border="0" align="center" cellpadding="1"  bgcolor="#000000"cellspacing="1">
      <tr>
        <td width="412" align="center" bgcolor="#003366"><span class="a">نام تیتر اخبار را وارد کنید:</span>
          <input type="text" name="titlefield" id="textfield2" /></td>
        </tr>
      <tr>
        <td align="center" bgcolor="#666666" class="a">متن داخل اخبار را در کادر زیر وارد کنید</td>
        </tr>
      <tr>
        <td height="200" bgcolor="#CCCCCC"><textarea name="bodyarea" id="textarea" cols="47" rows="25"></textarea></td>
        </tr>
      <tr>
        <td height="21" align="center" bgcolor="#666666"><input type="submit" name="insertnews" id="button" value="اضافه شدن نام تیتر ومتن داخل اخبار" /></td>
        </tr>
    </table></th>
    </tr>
</table><hr />

 
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
    <th width="199" bgcolor="#FFFFFF" scope="col"><a href="index.php">برگشت به صفحه اصلی</a></th>
    <th width="195" bgcolor="#FFFFFF" scope="col"><a href="cont.php">بازگشت به کنترل پنل</a></th>
    </tr>
</table>
 >

</form>

</body>
</html>
</body>
</html>