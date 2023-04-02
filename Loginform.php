<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<? 
//////////////////////////////////////////////////////////////////////////////
///								Login 										//
//////////////////////////////////////////////////////////////////////////////

$submit = $_POST['login'];

 
if($submit) {
	$user = $_POST['userfield'];
	$pass = $_POST['passfield'];
	if(!$user || !$pass) $message = '<font color="red">Sorry, = enter both fields</font>.<br><br>';	
	else {
		include('config.php');
		$sql = mysql_query('select * from users where user = "'.$user.'" and pass = "'.md5($pass).'"');
		$count = mysql_num_rows($sql);
		$fetch = mysql_fetch_assoc($sql);
		if($count) $message = '<font color="green">Thank you MR '.$fetch['name'].' '.$fetch['lname'].', have fun :)</font>.<br><br>';
		else $message = '<font color="red">worng information</font>.<br><br>';
		
		mysql_close($db_con);
	}
}

?>

<div >
<? if($message) echo $message; else echo 'Please Enter your logini informations: <br><br>';?>
</div>



<form action="" method="POST">
<table width="30%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="4"   style="border-bottom:thin solid #9C0; color: #FFF;" bgcolor="#666666">Please Enter your login informations</td>
  </tr>
  <tr>
    <td width="30%" bgcolor="#CCCCCC">Username:</td>
    <td colspan="2" bgcolor="#CCCCCC"><input type="text" name="userfield" id="textfield"  alue="<?=$_POST['userfield'];?>"  style="border:1px solid #CCC" onfocus="this.style.border = '1px dashed blue'" onblur="this.style.border = '1px solid #CCC'"/></td>
    <td width="21%" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">Password:</td>
    <td colspan="2" bgcolor="#CCCCCC"><input type="password" name="passfield"  /></td>
    <td bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">&nbsp;</td>
    <td width="24%" align="right" bgcolor="#CCCCCC"><input type="submit" name="login" id="button" value="Login" /></td>
    <td width="25%" bgcolor="#CCCCCC"><input type="reset" name="button2" id="button2" value="Clear" /></td>
    <td bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" bgcolor="#CCCCCC">Remmber me
      <input type="checkbox" name="checkbox" id="checkbox" /></td>
    <td bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
</table>
</form>
</body>
</html>