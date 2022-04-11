<?php
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>update produk</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet" >

</head>
<body>
<?php

include_once 'connect.php';
$edit1 = mysqli_query($link, "SELECT * FROM produk");

$id_produk = $_GET['id_produk'];

$produk_panggil = mysqli_query($link, "SELECT * FROM produk WHERE id_produk = '$id_produk'");

while($produklagi = mysqli_fetch_array($produk_panggil)){
	$nama_produk = $produklagi['nama_produk'];
	$img = 'upload/'.$produklagi['gambar'];
	$deskripsi = $produklagi['deskripsi'];
	$jenis = $produklagi['jenis'];
	$harga = $produklagi['harga'];
	$gambar = $produklagi['gambar'];

	
}

?>

<div class="container" style="margin-bottom:200px;">
	<div class="row">
		<div class="col-md-12">
<h1>Update Data Produk</h1>

<form action="update.php?id_produk=<?php echo $id_produk;?>" method="post" class="form1" enctype="multipart/form-data">
	<table width="100%" class="table-bordered" cellpadding="10">
			<tr style="a">
				<td>Nama</td>
				<td><input type="text" name="nama_produk" class="form-control" value="<?php echo $nama_produk;?>" ></td>
			</tr>
						<tr>
				<td>Gambar</td>

				<td>


					<input type="file" name="c_image" class="form-control" value="<?php echo $img;?>"><img src="<?php echo $img;?>" style="width: 250px; height:auto;"></td>
			</tr>
						<tr>
				<td>Deskripsi</td>
				<td>
					<textarea rows="3" name="deskripsi" class="form-control"  ><?php echo htmlspecialchars($deskripsi); ?></textarea> </td>
			</tr>
									
						<tr>
				<td >Jenis</td>
				<td><select class="form-select" name="jenis" aria-label="Default select example">
  <option selected><?php echo $jenis; ?> </option>
  <option value="tas">Tas</option>
  <option value="laptop">Laptop</option>
  <option value="baju">Baju</option>
  <option value="sepatu">Sepatu</option>
  <option value="buku" >Buku</option>

</select>
					</td>
			</tr>
						<tr>
				<td>Harga</td>
				<td><input type="number" name="harga" class="form-control" value="<?php echo $harga; ?>" ></td>
			</tr>

			


					
			</table>

			<div class="buttonya" style="margin-top:50px; text-align:center;">
			<input type="submit" name="update" class="form-control btn btn-primary"> || 
<a href="read.php" class="form-control btn btn-danger">Kembali</a>
</form>


		</div></div></div>



	

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>
<?php 



if(isset($_POST['update'])){
$nama_produk = $_POST['nama_produk'];
$deskripsi = $_POST['deskripsi'];
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];

$image = basename($_FILES['c_image']['name']);

$image_temp = $_FILES['c_image']['tmp_name'];


if($image_temp!=""){
$target = "upload/";
$targetFilePath = $target.$image;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
$allowType = array('jpg', 'png', 'jpeg', 'gif');
if(in_array($fileType, $allowType)){
	if(move_uploaded_file($_FILES['c_image']['tmp_name'], $targetFilePath)){
$update = mysqli_query($link, "UPDATE produk SET nama_produk = '$nama_produk', gambar = '$image', deskripsi = '$deskripsi', jenis = '$jenis', harga = '$harga', tgl_upload = NOW() WHERE id_produk = '$id_produk'");

if($update == false){
					die("submit gagal ".mysqli_connect_error());
				}else{
					echo "submit berhasil";
					header("Location:read.php");				
				}
	}else{
		echo "gagal upload";
	}
	}else{
		echo "not jpg";
	}

}else{
	
	$update = mysqli_query($link, "UPDATE produk SET nama_produk = '$nama_produk', deskripsi = '$deskripsi', jenis = '$jenis', harga = '$harga', tgl_upload = NOW() WHERE id_produk = '$id_produk'");
	header("Location:read.php");	
}



		

	
}

print_r($_POST);


ob_end_flush();
?>