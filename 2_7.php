<html>
<head>
			<title>.:: Program Menghitung Discount ::.</title>
</head>
<body>
<font face=verdana size=2>
<form>Jumlah Bayar
<input type=text name=totalbeli><br><br>
<!-- <input type=submit value="Hitung Diskon"> -->
<input type=submit value="Hitung Diskon" name=tuku>
<!-- <input type=submit value=Proses name=proses> -->
</form>
<?php
// if(!empty($_POST['proses'])) { 
// 	$nilai = $_POST['nilai'];
// }
if(!empty($_POST['tuku'])) {
	$totalbeli = $_POST['totalbeli'];
// if (isset($totalbeli))
{
		$toyar=intval($totalbeli);
		$diskon=0;
		if ($toyar>=500000)
		$diskon=(0.5*$toyar);
		else
			if ($toyar>=100000)
			$diskon=(0.1*$toyar);
			else
				if ($toyar>=50000)
				$diskon=(0.05*$toyar);
				else
				print("Maaf Tidak Ada Diskon <br>\n");
				printf("Jumlah Bayar = %d<br>\n",$toyar);
				printf("Diskon = %d<br>\n",$diskon);
				$totalbayar=$toyar-$diskon;
				printf("<b>Total Bayar = %d<br></b>\n",$totalbayar);
}}
?>
</body>
</html>
