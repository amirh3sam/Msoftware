<?php
	$ip = $_SERVER['REMOTE_ADDR'];
	
	$file_ip = fopen('scripts/ip.txt', 'rb');
	while (!feof($file_ip)) $line[]=fgets($file_ip,1024);
	for ($i=0; $i<(count($line)); $i++) {
		list($ip_x) = split("\n",$line[$i]);
		if ($ip == $ip_x) {$found = 1;}
	}
	fclose($file_ip);
	
	if (!($found==1)) {
		$file_ip2 = fopen('scripts/ip.txt', 'ab');
		$line = "$ip\n";
		fwrite($file_ip2, $line, strlen($line));
		$file_count = fopen('scripts/visitors_number.txt', 'rb');
		$data = '';
		while (!feof($file_count)) $data .= fread($file_count, 4096);
		fclose($file_count);
		list($today, $yesterday, $total, $date, $days) = split("%", $data);
		if ($date == date("Y m d")) $today++;
			else {
				$yesterday = $today;
				$today = 1;
				$days++;
				$date = date("Y m d");
			}
		$total++;
		$line = "$today%$yesterday%$total%$date%$days";
		
		$file_count2 = fopen('scripts/visitors_number.txt', 'wb');
		fwrite($file_count2, $line, strlen($line));
		fclose($file_count2);
		fclose($file_ip2);
	}
?>