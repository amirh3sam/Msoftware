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
.starred {
	color: #F00;
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
-->
</style></head>

<body>

<? 
//////////////////////////////////////////////////////////////////////////////
///							Register 										//
//////////////////////////////////////////////////////////////////////////////


$register = $_POST['register'];

 
if($register) {
	$user = $_POST['user_reg'];
	$pass = $_POST['pass_reg'];
	$name = $_POST['name_reg'];
	$lname = $_POST['lname_reg'];
	$age = $_POST['age_reg'];
	if(!$user || !$pass) $message_reg = '<font color="red">خطا ! یک یا هر دو کادر خالی می باشد</font>.<br><br>';	
	else {
		include('config.php');
		$sql = mysql_query('select * from users where user = "'.$user.'" ');
		$count = mysql_num_rows($sql);
		echo mysql_error();
		if($count) $message_reg = '<font color="red">خطا!از این نام قبلا استفاده شده</font>.<br><br>';
		else {
			$sql = mysql_query('insert into users (user,pass,name,lname,age) values ("'.$user.'","'.md5($pass).'","'.$name.'","'.$lname.'","'.$age.'")');	
			if($sql) $message_reg =  'ممنون برای ثبت نام <meta http-equiv="refresh" content="2;URL=index.php" />';
			

			else $message_reg = '<font color="red">خطا ! مشکل وجود دارد </font>.<br><br>';
		}
		
		mysql_close($db_con);
	}
}

?>
<div  align="center">
  <? if($message_reg) echo $message_reg; ;?>
  <br />
</div>
<form action="" method="post">
<table width="400" border="0" align="center" cellpadding="1"  bgcolor="#000000"cellspacing="1">
  <tr>
    <td colspan="2" align="center" bgcolor="#003366" class="a">اطلاعات خود را ثبت کنید</td>
    </tr>
  <tr>
    <td bgcolor="#CCCCCC">نام کاربری: (<span class="starred">*</span>)</td>
    <td bgcolor="#CCCCCC"><input name="user_reg" type="text"  value="<?=$_POST['user_reg'];?>" /></td>
  </tr>
  <tr>
    <td bgcolor="#666666" class="a">رمزعبور: (<span class="starred">*</span>)</td>
    <td bgcolor="#666666"><input name="pass_reg" type="password"  value="" /></td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">نام : </td>
    <td bgcolor="#CCCCCC"><input name="name_reg" type="text"  value="" /></td>
  </tr>
  <tr>
    <td bgcolor="#666666" class="a">نام خانوادگی: </td>
    <td bgcolor="#666666"><input name="lname_reg" type="text"  value="" /></td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">سن: </td>
    <td bgcolor="#CCCCCC"><input name="age_reg" type="text"  value="" /></td>
  </tr>
  <tr>
    <td align="center" bgcolor="#666666"><input name="register" type="submit" value="ثبت نام"  style="border:1px solid #CCC" onfocus="this.style.border = '1px dashed blue'" onblur="this.style.border = '1px solid #CCC'" /></td>
    <td bgcolor="#666666">&nbsp;</td>
  </tr>
</table>
</form>
<table width="400" border="0" align="center">
  <tr>
    <th scope="col"><a href="index.php">بازگشت به صفحه اصلی</a></th>
  </tr>
</table>

</body>
</html>