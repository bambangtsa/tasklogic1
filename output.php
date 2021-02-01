<title>Task Logic 1</title>
<?php
	$angka = $_GET["angka"];
	$n='';
	for($i=0;$i<strlen($angka);$i++){
		if($angka[$i]>0){
			$n=$n.$angka[$i];
		}
	}
	//echo $n;
	//echo "<br>";
	echo "Angka	: $angka <br><br>";
	for($i=0;$i<strlen($n);$i++){
		echo $n[$i];
		$kosong= strlen($n) - $i - 1;
		for($j=0;$j<$kosong;$j++){
			echo 0;
			$kosong - 1;
		}
		echo "<br>";
	}		

?>