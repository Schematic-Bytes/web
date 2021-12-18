<?php 
	$ename=$_POST["ename"];
	$bpay=$_POST["bpay"];
	$hra=$_POST["hra"];
	$da=$_POST["da"];
	$percentage=($bpay * $da)/100;
	$total=$bpay + $percentage + $hra;
	$out = "-- Employee Details --\n
    Employee Name: $ename\n
    Basic Salary: $bpay\n
    DA in %: $da\n
    HRA: $hra\n
    Total: $total\n
    ";
	echo $out;
	$filename = "temp.txt";
	$file = fopen($filename, "w+");
	fwrite($file, $out);
	fclose($file);
	header("Location:$filename");
?>
