<?php
if(is_array($_FILES)) {

		
		$getFile = $_FILES['userImage']['name'];
		$arraySize = count($getFile);

		for($i=0;$i<$arraySize;$i++){
			$sourcePath = $_FILES['userImage']['tmp_name'][$i];
			$targetPath = "images/".$_FILES['userImage']['name'][$i];
			if(move_uploaded_file($sourcePath,$targetPath)) {
		


?>
			<img src="<?php echo $targetPath; ?>" width="150px" height="150px" />
<?php
			}
		}
	}

?>