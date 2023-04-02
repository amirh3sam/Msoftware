<? if($_POST['login']){
 	$nextpage = 'login';
	setcookie('mylogin','amir hessam',time() + 5000);
 echo '<meta http-equiv="refresh" content="3;URL=login.php" />';	
}else if($_POST['page2']){
	$nextpage = 'page2';
	 echo '<meta http-equiv="refresh" content="3;URL=enteruser.php " />';
	
}
?>
<br />
<br />
<br />
<br />
<br />
<br />
<br />

<div align="center">
<div style="padding:10px; border:1px dotted #336; background-color:#F5F2FF; font-family:arial; width:500px" align="center">
  Thank you , Please wait for 2 sec... this will automaticly direct you to next page....<br />
  if it didint work <a href="<?=$nextpage;?>.php"> click here.</a></div>
</div>