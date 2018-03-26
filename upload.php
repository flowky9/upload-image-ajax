<?php
session_start();
// jika sebuah array
if(is_array($_FILES)) {

		// menghitung jumlah array
		$getFile = $_FILES['userImage']['name'];
		$arraySize = count($getFile);

		for($i=0;$i<$arraySize;$i++){
			// melakukan upload file
			$sourcePath = $_FILES['userImage']['tmp_name'][$i];
			$targetPath = "images/".$_FILES['userImage']['name'][$i];
			$sesiGambar[$i] = $targetPath;
			$_SESSION['sesiGambar'] = $sesiGambar;
			if(move_uploaded_file($sourcePath,$targetPath)) {
		

?>			

			<!-- Menampilkan file yang telah di upload -->
			<div id="img-container">
				<img src="<?php echo $targetPath; ?>" width="150px" height="150px" />
				<span class="btn" data-datac="<?php echo $targetPath; ?>">delete</span>
			</div>


<?php
			}
		}
	}

?>