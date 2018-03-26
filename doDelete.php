<?php 	


$name = $_GET['name'];

$target = $name;

if(file_exists($target)){
	unlink($target);
	echo $name."berhasil di hapus";
}else {
	echo "file tidak ditemukan";
}



 ?>