<?php 	

session_start();

$name = $_GET['name'];

$target = $name;

if(file_exists($target)){
	unlink($target);
	echo $name." berhasil di hapus";
}else {
	echo "file tidak ditemukan";
}



 ?>

 <?php

// jika sebuah array


		// menghitung jumlah array

		$sesiGambar = $_SESSION['sesiGambar'];
		$varGambar = array_search($target, $sesiGambar);
		unset($sesiGambar[$varGambar]);
		$arraySize = count($sesiGambar);

		foreach ($sesiGambar as $key) {
			# code...
		

			

			
		

?>			

			<!-- Menampilkan file yang telah di upload -->
			<div id="img-container">
				<img src="<?php echo $key; ?>" width="150px" height="150px" />
				<span class="btn" data-datac="<?php echo $key; ?>">delete</span>
			</div>


<?php
			}

		$_SESSION['sesiGambar'] = $sesiGambar;
		
	

?>