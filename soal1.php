<?php
	error_reporting(0);
	function biodata() {
		$nama = "M Syifa udzihni alhamdi";
		$address = "Desa pacar gang bulung indah No 30 kecamatan tirto kabupaten Pekalongan";
		$hobbies = array("browsing,bereksperimen,opreker");
		$school->highSchool = "SMK SYAFII AKROM KOTA PEKALONGAN";
		$school->University = "BELUM";
		$is_married = false;
		$skill = array ([{name: "php",score: 20},{name: "javascript",score: 85}]);

		$biodata = array($nama,$address,$hobbies,$is_married,$school,$skill);
		print(json_decode($biodata));

		}
		biodata();

?>