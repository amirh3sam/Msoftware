<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<? ///////////////////////////////////////////////////////date and time scrip\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\  ?>
<script type="text/javascript">
	function clock(dom){
		date = new Date();
		h = date.getHours();
		m = date.getMinutes();
		s = date.getSeconds();
		if(h < 10 ) h = '0'+h;
		if(m < 10 ) m = '0'+m;		
		if(s < 10 ) s = '0'+s;		
		dom.innerHTML =  h+':'+m+':'+s;
		setTimeout("clock(document.getElementById('clock'))",1000);
	}
   
</script>
<? 
function correcting_date($d,$day,$month,$month2,$year,$symbol) { 
    $week= array("يكشنبه","دوشنبه","سه شنبه","چهارشنبه","پنج شنبه","جمعه","شنبه");
    $months = array("فروردين","ارديبهشت","خرداد","تير","مرداد","شهريور","مهر","آبان","آذر","دي","بهمن","اسفند"); 
    if ($year== 0){$year=2000;} 
    if ($year<100){$year +=1900;} 
    $y=1; 
    for($i=0;$i<3000;$i+=4) { 
        if ($year==$i) {$y=2;} 
        } 
    for($i=1;$i<3000;$i+=4) { 
        if ($year==$i) {$y=3;} 
        } 
if ($y==1) { 
        if( ($month < 3) || (($month == 3) && ($day < 21)) ) $year -=  622; else $year -= 621;
		 

        switch ($month) { 
            case 1: if($day<21) {$month=10; $day+=10;} else { $month=11; $day-=20 ;} break; 
            case 2: if($day<20) {$month=11; $day+=11;} else { $month=12; $day-=19 ;}  break; 
            case 3: if($day<21) {$month=12; $day+=9;} else { $month=1; $day-=20 ;}   break; 
            case 4: if($day<21) {$month=1; $day+=11;} else { $month=2; $day-=20 ;}   break; 
            case 5: 
            case 6: if($day<22) {$month-=3; $day+=10;} else { $month-=2; $day-=21 ;}  break; 
            case 7: 
            case 8: 
            case 9: if($day<23) {$month-=3; $day+=9;} else { $month-=2; $day-=22 ;}  break; 
            case 10:if($day<23) {$month=7; $day+=8;} else { $month=8; $day-=22 ;}    break; 
            case 11: 
            case 12:if($day<22) {$month-=3; $day+=9;} else { $month-=2; $day-=21 ;}  break; 
       default:          break; 
        } 
        } 
if ($y==2) { 
		if( ($month < 3) || (($month == 3) && ($day < 20)) ) $year -=  622; else $year -= 621;
        switch ($month) { 
            case 1: if($day<21) {$month=10; $day+=10;} else { $month=11; $day-=20 ;}  break; 
            case 2: if($day<20) {$month=11; $day+=11;} else { $month=12; $day-=19 ;}  break; 
            case 3: if($day<20) {$month=12; $day+=10;} else { $month=1; $day-=19 ;}   break; 
            case 4: if($day<20) {$month=1; $day+=12;} else { $month=2; $day-=19 ;}   break; 
            case 5: if($day<21) {$month=2; $day+=11;} else { $month=3; $day-=20 ;}   break; 
            case 6: if($day<21) {$month=3; $day+=11;} else { $month=4; $day-=20 ;} break; 
            case 7: if($day<22) {$month=4; $day+=10;} else { $month=5; $day-=21 ;}   break; 
            case 8: if($day<22) {$month=5; $day+=10;} else { $month=6; $day-=21 ;}   break; 
            case 9: if($day<22) {$month=6; $day+=10;} else { $month=7; $day-=21 ;}  break; 
            case 10:if($day<22) {$month=7; $day+=9;} else { $month=8; $day-=21 ;}    break; 
            case 11:if($day<21) {$month=8; $day+=10;} else { $month=9; $day-=20 ;}   break; 
            case 12:if($day<21) {$month=9; $day+=10;} else { $month=10; $day-=20 ;}  break; 
       default:          break; 
        } 
        } 
if ($y==3) { 
		if( ($month < 3) || (($month == 3) && ($day < 21)) ) $year -=  622; else $year -= 621;
        switch ($month) { 
            case 1: if($day<20) {$month=10; $day+=11;} else { $month=11; $day-=19 ;} break; 
            case 2: if($day<19) {$month=11; $day+=12;} else { $month=12; $day-=18 ;} break; 
            case 3: if($day<21) {$month=12; $day+=10;} else { $month=1; $day-=20 ;}   break; 
            case 4: if($day<21) {$month=1; $day+=11;} else { $month=2; $day-=20 ;}   break; 
            case 5: 
            case 6: if($day<22) {$month-=3; $day+=10;} else { $month-=2; $day-=21 ;} break; 
            case 7: 
            case 8: 
            case 9: if($day<23) {$month-=3; $day+=9;} else { $month-=2; $day-=22 ;}  break; 
            case 10:if($day<23) {$month=7; $day+=8;} else { $month=8; $day-=22 ;}    break; 
            case 11: 
            case 12:if($day<22) {$month-=3; $day+=9;} else { $month-=2; $day-=21 ;}  break; 
       default:          break; 
        } 
        } 
	$show = '';
	if ($d) $show .= $week[$d].$symbol;
	$show.= $day.$symbol; 
	if ($month2) {
		$month2+= 9;
		if($month2 > 12) $month2 -= 12;
		if($month2 < 10) $month2 = '0'.$month2;
		$show.= $month2.$symbol;
	} else $show.= $months[$month-1].$symbol; 
	$show.= $year; 
	return $show;
} ?>
<?  /////////////////MOSHAHEDE bazdid emrooz diroz kol\\\\\\\\\\\
		
		$file_count = fopen ('scripts/visitors_number.txt' , 'rb');
		$data = '' ;
		while (!feof($file_count)) $data .= fread($file_count, 4096);
		fclose ($file_count);
		list($today, $yesterday,$total ,$date ,$days )= split ("%", $data);
	////////////////////////////////////////////////////////////////////////////////	
		?>
        
		

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>index</title>

<? /////////////////////////////////////ask scrip\\\\\\\\\\\\\\\\\\\\\\\\\\\\ ?>
<script type="text/javascript" src="scripts/scriptaculous/src/prototype.js"></script>
<script type="text/javascript" src="scripts/scriptaculous/src/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="scripts/scriptaculous/src/lightbox.js"></script>
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
<? ////////////////////////////////////////////////////////////////////////////////////// ?>

<? include('config.php'); ?>
<style type="text/css">
<!--
a:link {
	text-decoration: none;
	color: #069;
}
a:visited {
	text-decoration: none;
	color: #069;
}
a:hover {
	text-decoration: none;
	color: #C30;
}
a:active {
	text-decoration: none;
}
.ش {
	color: #FFF;
	font-size: 14;
}
.bazdid {
	color: #C30;
}
.bazdid {
	color: #CF0;
}
.bazdid {
	color: #33F;
}
.bazdid {
	color: #000;
}
.bazdid {
	font-weight: bold;
}
.bazdid {
	font-family: Tahoma, Geneva, sans-serif;
}
.bazdid {
	font-family: "Arial Black", Gadget, sans-serif;
}
body,td,th {
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 12px;
	color: #FFF;
}
.saat {
	color: #000;
}
.date {
	color: #FFF;
}
.bazdid {
	color: #000;
}
.date {
	color: #000;
}
.baz2 {
	color: #000;
}
.baz2 {
	color: #000;
}
body {
	background-color: #ACB6C4;
	background-image: url(img/bg.jpg);
	background-repeat: repeat;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.شش {
	color: #000;
}
-->
</style></head>

<body>
 
<p>
  <?

$submit = $_POST['login'];

 
if($submit) {
	$user = $_POST['userfield'];
	$pass = $_POST['passfield'];
	if(!$user || !$pass) $message = '<font color="red">خطا ! یک یا هر دو کادر خالی می باشد</font>.<br><br>';	
	else {
		
		$sql = mysql_query('select * from users where user = "'.$user.'" and pass = "'.md5($pass).'"');
		
		$count = mysql_num_rows($sql);
		$fetch = mysql_fetch_assoc($sql);
		if($count) {
			if ($fetch['access']==1 ) $goto = "cont.php"; else $goto = "enteruser.php";
			
			echo '<br /> 
<br />
<br />
<br />
<br />
<br />
<br />

<div align="center">
<div style="padding:20px; border:1px dotted #336; background-color:#F5F2FF; font-family:tahoma; width:500px; color:#333; line-height:25px" align="center" dir="rtl">
  ممنون از ورود شما ! لطفا چند لحظه صبر فرمایید....<br />
  در صورت انجام نشدن<a href="enteruser.php"> اینجا را کلیک کنید</a></div>
</div>'; $ok = 1;
		 
		}
   		else $message = '<font color="red">خطا! اطلاعات اشتباه وارد شده</font>.<br><br>';
		
		
	}
}
 if($ok == 0 ) {
?>
  
  
</p>
<span style="color: #FFF"></span>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="2" bgcolor="#000000">
  <tr>
    <td height="146" colspan="2" align="center" bgcolor="#FFFFFF"><img src="img/banner.jpg" width="798" height="170" /></td>
  </tr>
  <tr>
 
  </tr>
  <tr>
    <td width="305" rowspan="2" align="center" valign="top" bgcolor="#CCCCCC"><table width="100%" border="0" cellpadding="5" cellspacing="0">
      <tr>
      
        <td colspan="3"align="center" bgcolor="#003366" class="ش" style="border-bottom:1px solid #FFF">ورود به سایت</td>
      </tr>

      <tr>
        <td height="140" colspan="3" align="center" valign="top" bgcolor="#CCCCCC" style="border-bottom:1px solid #000">
        
        <form action="" method="POST"><table width="100%" border="0"  cellpadding="1" cellspacing="0">
<tr>
  <td colspan="2" align="right" bgcolor="#006699" class="ش"><input type="text" name="userfield" id="textfield"    value="<?=$_POST['userfield'];?>" style="border:1px solid #CCC; width:120px" onfocus="this.style.border = '1px dashed blue'" onblur="this.style.border = '1px solid #CCC'"/></td>
        <td width="1%" bgcolor="#006699" class="ش">:</td>
        <td width="30%" align="right" bgcolor="#006699"><span  >نام کاربری </span></td>
      </tr>

      <tr>
        <td colspan="2" align="right" bgcolor="#006699" class="ش"><input type="password" name="passfield" id="textfield2"    style="border:1px solid #CCC;  width:120px" onfocus="this.style.border = '1px dashed blue'" onblur="this.style.border = '1px solid #CCC'"/></td>
        <td bgcolor="#006699" class="ش">:</td>
        <td align="right" bgcolor="#006699"><span class="ش">رمزعبور</span></td>
      </tr>
      <tr>
        <td width="2%" align="right" bgcolor="#006699" >&nbsp;</td>
        <td width="67%" align="right" bgcolor="#006699" ><input type="reset" style="font:Tahoma, Geneva, sans-serif" name="button2" id="button2" value="پاک کردن" />          <input type="submit" name="login" id="button" value="ورود"  /></td>
        <td bgcolor="#006699" >&nbsp;</td>
        <td align="right"bgcolor="#006699" >&nbsp;</td>
        </tr> 
</table><br />
</form> <div  style="border: 1px dotted #000 "  >
<? if($message) echo $message; else echo "<br /><br />";?>
</div>
      
</td>
      </tr>

      <tr>
        <td colspan="3"align="center" valign="top" bgcolor="#003366" class="ش" style="border-bottom:1px solid #FFF">منوی اصلی</td>
      </tr>
      <tr>
        <td colspan="3" align="center" bgcolor="#CCCCCC"><a href="index.php">صفحه اصلی</a></td>
      </tr>
      <tr>
        <td colspan="3" align="center" bgcolor="#CCCCCC"><a href="شسیشسی">ارشیو نرم افزار</a></td>
      </tr>
      <tr>
        <td colspan="3" align="center" bgcolor="#CCCCCC"><a href="شسیشسی">نرم افزار های جدید</a></td>
      </tr>
      <tr>
        <td colspan="3"align="center" bgcolor="#CCCCCC" style="border-bottom:1px solid #000"><a href="بیل">اخبار سایت</a></td>
      </tr>
      <tr>
     
      </tr>
      <tr>
       
      </tr>
      <tr>
      
      </tr>
      <tr>
        <td colspan="3" align="center" bgcolor="#003366">ساعت</td>
      </tr>
      <tr>
        <td colspan="3" align="center" "bgcolor="#CCCCCC" class="saat">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" align="center" "bgcolor="#CCCCCC" class="saat"><span id="clock" ></span>
<script type="text/javascript">clock(document.getElementById('clock'));</script></td>
      </tr>
      <tr bgcolor="#CCCCCC">
        <td colspan="3" align="center"  > 
 
</td> 
      </tr>
      <tr>
        <td colspan="3" align="center" bgcolor="#CCCCCC"><hr /></td>
      </tr>
      <tr>
        <td colspan="3" align="center" bgcolor="#003366">تاریخ</td>
      </tr>
      <tr>
        <td colspan="3" align="center" bgcolor="#CCCCCC">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" align="center" bgcolor="#CCCCCC"><span class="date">
          <?=correcting_date(date('N'),date('d'),date('m'),'',date('Y'),' ');?>
        </span></td> 
      </tr>
      <tr>
        <td colspan="3" align="center" bgcolor="#CCCCCC"><hr /></td>
      </tr>
      <tr>
        <td colspan="3" align="center" bgcolor="#003366">امار سایت</td>
      </tr> 

      <tr> 

        <td colspan="3" align="center" bgcolor="#CCCCCC"><span class="baz2">
          <br />
          <? include ("countwithfile.php"); ?>
: تعداد کل بازدید </span> 

</td>
      </tr> 

      <tr>

     
<td colspan="3" align="center" bgcolor="#CCCCCC" class="شش">تعداد ناظران : <? ///////////////nazer Online////\\\\\\\\\\\\\
		include ("scripts/visitors.php") ;
		///////////////////////////////////////
		?> نفر <br /><br />
<br /> مشاهدات امروز : <font color="#FF0000"><?= $today ; ?> </font>  نفر </td>
     
     
      </tr>
      <tr>
        <td colspan="3" align="center" bgcolor="#CCCCCC" class="شش"></td>
      </tr>
      <tr>
        <td colspan="3" align="center" bgcolor="#CCCCCC"> 
		</td>
      </tr>
    </table></td>
    <td width="492" align="center" valign="top" bgcolor="#999999"><table width="100%" height="217" border="0" cellpadding="5" cellspacing="0">
      <tr>
        <td width="88%" align="center"bgcolor="#003366" class="ش" style="border-bottom:1px solid #FFF; color: #D6D6D6;">اخبار سایت</td>
        <td width="12%" align="center"bgcolor="#CCCCCC" style="border-bottom:1px solid #000"><a href="regester.php">ثبت نام</a></td>
      </tr>
      <tr bgcolor="#999999">
        <td colspan="2"> </td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#999999"><? $sql = mysql_query ('select * from news order by id desc limit 0,4');
		$fetch = mysql_fetch_assoc($sql);
		do{ 
		echo '<strong style=" color:black" align="justify">'.$fetch['title'].'</strong><br /><div align="justify" style = "padding :5px;color:black" align="justify">'.$fetch['body'].'</div><br /><br /><hr/>';
		}while ($fetch = mysql_fetch_assoc($sql));
		?>
          </td>
      </tr>
      <tr>
        <td colspan="2" align="center" bgcolor="#003366" class="ش" style="border-bottom:1px solid #FFF">نرم افزار های جدید</td>
      </tr>
      <tr>
        <td colspan="2" align="center" bgcolor="#999999"><? $sql = mysql_query ('select * from softwarenames order by id desc limit 0,8');
		$fetch = mysql_fetch_assoc($sql);
		do{ 
		echo '<strong><a href = "'.$fetch['name'].'.php">'.$fetch['name'].'</a> </strong><br /><br /><hr  color ="#707070" style="border-bottom:1px solid #C3C3C3 " > ';   
		}while ($fetch = mysql_fetch_assoc($sql));
		?>
        </td>
      </tr>
      <tr>
        <td colspan="2" align="center" bgcolor="#999999">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" valign="top" bgcolor="#999999"><a href="../wallpaper_small3.jpg" rel="lightbox" title="rise from sky" > <img src="../wallpaper_small3.jpg" width="200" height="125"></a></td>
  </tr>
  <tr>
    <td colspan="2" align="center" bgcolor="#000033" class="ش">copyright &copy; 2010 Mechanical Software</td>
  </tr>
</table>
</body>
</html>

<? } else echo '<meta http-equiv="refresh" content="2;URL='.$goto.'" />'; 
mysql_close($db_con);
?>