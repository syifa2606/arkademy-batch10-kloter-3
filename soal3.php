<?php 
	function cetak($parameter)
	{
		$char = "0123456789abcdefghijklmnopqrstuvwxyz";
		for ($i=0; $i <$parameter; $i++) { 
			$randomChar = substr(str_shuffle($char), 0, 32);
			print($randomChar."<br>");
		}
	}

	//fungsi menampilkan
	cetak(2);
?>