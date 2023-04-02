<? 
$fp = fopen('myfile.txt','r');
$fr = fread ($fp,filesize('myfile.txt'));
if (isset($fr)) {
	$fr = (int)$fr;
$fr++ ;	
}
fclose ($fp);
$fp = fopen('myfile.txt','w+');
$fw = fwrite($fp,$fr);
fclose($fp);
echo $fr ;
?>
