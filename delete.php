<?php
include_once 'connect.php';


$id_produk=$_GET['id_produk'];
$delete = mysqli_query($link, "DELETE FROM produk WHERE id_produk = '$id_produk'");

if($delete ==false){
	die("delete gagal".mysqli_connect_error());
}else{
	echo "delete berhasil";	
}


header("Location:read.php");


?>