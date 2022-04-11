<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detail_barang</title>
	
<link href="css/bootstrap.min.css" rel="stylesheet" >


<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>

</head>
<body>

<?php 
include_once 'panggil_header.php';

?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			

<?php 
include_once 'connect.php';



if(isset($_GET['id_produk'])){
$id_produk = $_GET['id_produk'];
}else{
	die( "No Selected");
}


$query_detail = mysqli_query($link, "SELECT * FROM produk WHERE id_produk='$id_produk'");
while($produklagi = mysqli_fetch_array($query_detail)){
	$nama_produk = $produklagi['nama_produk'];
	$img = 'upload/'.$produklagi['gambar'];
	$deskripsi = $produklagi['deskripsi'];
	$jenis = $produklagi['jenis'];
	$harga = $produklagi['harga'];

	
}




?>			
<table width="100%" style="margin-top:50px">
	<tr >
		<td rowspan="6" style="padding: 50px"><img src=" <?php echo $img;?>" style="width: 500px;"></td>
		<td rowspan="2"><h1>Nama Produk</h1><br><h1 style="color: white; text-align: left; font-size: 50px"><?php echo $nama_produk;?></h1></td>
	</tr>
		<tr>
	
		
	</tr>
		<tr>
	
		<td rowspan="2"><h1>Jenis</h1><br><h1 style="color:white; font-size: 50px"><?php echo $jenis;?></h1><br></td>
	</tr>
		<tr>
	
	</tr>
		<tr>
		
		<td rowspan="2" ><h1>Harga Rp</h1><br><h1 style="color:white; font-size:50px"><?php echo number_format($harga, 0);?></td>
	</tr>
		<tr>
		
		
	</tr>
		<tr>
		<td colspan="2" style="padding: 50px"><h1><?php echo $deskripsi;?></td>
		
	</tr>
		<tr>
		<td colspan="2"><a href="#" onclick="baliklagi()" class="form-control btn btn-primary"><h3>Lihat Produk Lainnya</h3></a></td>
	</tr>
</table>

		</div>
	</div>



<div class="banner" style="margin-top:200px">
<table border="1" width="100%">
	
<img src="img/admin.png" width="150px">

		 <tr>
		 <td><h1>BELANJA SESUAIKAN DENGAN KEBUTUHAN MU !!!</h1></td>
		 <td><h5><img src="img/tangan.png" width="70px"></h5><br>
		 <center><h2>Belanja Kekinian</h2></center>
		 </td>
		 <td width="10%"></td>
	</tr>
</table>
</div>
</div>

<?php 
include_once 'panggil_footer.php';

?>
</body>
</html>

<script>
	function baliklagi(){
		window.history.back();
	}
</script>