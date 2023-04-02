//---------------------------------------------------------------------
//					Function ha.. 
//---------------------------------------------------------------------
// in aro balaye safe dakhele tage <head> bezad

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


//---------------------------------------------------------------------
// ino jai ke mikhai estefade koni copy kon .
//---------------------------------------------------------------------
// tarikhe farsi :
<?=correcting_date(date('N'),date('d'),date('m'),'',date('Y'),' ');?>

// tarikhe khareji :            
<?=date('l').' '.date('d').' '.date('M').', '.date('Y');?>
//---------------------------------------------------------------------

// time
<span id="clock" ></span>
<script type="text/javascript">clock(document.getElementById('clock'));</script>

//---------------------------------------------------------------------