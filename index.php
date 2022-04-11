<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="css/bootstrap.min.css" rel="stylesheet" ><style type="text/css"></style>
</head>
<style type="text/css">

body{
	background-color:#0088BB;
}


.tab1{

position: fixed;
z-index: 3;
transition: top 0.3s;
background-color: #606060;

}


.tab2{

position: block;
z-index: 3;
transition: top 0.3s;
background-color: #DEDEDE;

}	

.jumbo{
	position: absolute;
	top
	: 0;

}

.contoh{
	position: relative;
	z-index: 1;
	text-align: center;
	padding: 200px;
	color: white;
	text-decoration: none;

}

.container .a{
	border-radius: 100px;
}


	

.jumbo{
	position: absolute;
	top
	: 0;

}

.container{
	position: relative;
	z-index: 1;
	text-align: center;
	padding: 0px;
	color: white;
	text-decoration: none;
	margin-top: -150px;
}


.panel{
	background-color: white;
	line-height: 1px;

	box-shadow: 100px, 50px, 100px rgba(0, 0, 0, 1.0);
	margin-bottom: 100px;
	border-radius: 50px;
	margin-top: -10px;
	padding: 60px;
}

.footer p{
font-family: sans-serif;
font-style: italic;
font-size: 20px;
}



</style>

<body>




<div class="tab1">
<table width="100%" cellpadding="1px" >
	<tr>
		<td width="5%" ></td>
		<td width="5%" ></td>
		<td width="10%"></td>
		<td width="5%" ></td>
		<td width="5%" ></td>
		<td width="5%" ></td>
		<td width="5%" ></td>
		<td width="5%" ></td>

		<td width="5%" ></td>

		<td width="5%" ></td>
		<td width="5%" ></td>
		<td width="5%" ></td>

		<td width="5%" ></td>

		<td width="5%" ></td>
		<td width="10%"></td>

		<td width="10%"></td>

		<td width="5%"></td>
	</tr>
	<tr>
		<td></td>
		<td><img src="img/haha.png" width="100px"></td>
		<td><h4 style="color:white; font-style: italic;"><b>ShopPedia</b></h4> </td>
		<td colspan="8"><input type="text" name="cari" placeholder="  cari barang " style="width:450px; height:30px; border-radius:30px"> <img src="img/search.png" width="20px"></td>
		<td></td>
		<td colspan="2" style="text-align: right;"><img src="img/cart.png" width="30px">
		<img src="img/email.png" width="30px">
	<img src="img/notif.png" width="30px"></td>
	
		<td style="color: white;"><button class="btn" style="border-radius : 10px"><h4 style="color:white"><a href="tas.php" style="text-decoration:none; color:white;"> Semua Produk</h4></a></button></td>

		<td  style=" color:white;"><a href="read.php" class="btn btn-primary" style="border-radius : 10px"> <h4 style="text-align:center;">CRUD</h4></a></td>

		<td><img src="img/toko.png" width="30px"></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><p style="color:white">KATEGORI</p></td>
		<td><p style="color:white">Sepatu </p></td>
		<td><p style="color:white">Meja</p></td>
		<td><p style="color:white">Laptop</p></td>
		<td><p style="color:white">DLL</p></td>
	</tr>
</table></div>





<!--
-->
<div class="tab2">
<table width="100%" cellpadding="1px" >
	<tr>
		<td width="5%" ></td>
		<td width="5%" ></td>
		<td width="10%"></td>
		<td width="5%" ></td>
		<td width="5%" ></td>
		<td width="5%" ></td>
		<td width="5%" ></td>
		<td width="5%" ></td>

		<td width="5%" ></td>

		<td width="5%" ></td>
		<td width="5%" ></td>
		<td width="5%" ></td>

		<td width="5%" ></td>

		<td width="5%" ></td>
		<td width="10%"></td>

		<td width="10%"></td>

		<td width="5%"></td>
	</tr>
	<tr>
		<td></td>
		<td><img src="img/haha.png" width="100px"></td>
		<td><h4 style="color:white;"><b>TOKO INSCURE</b></h4> </td>
		<td colspan="8"><input type="text" name="cari" placeholder="  cari barang " style="width:450px; height:30px; border-radius:30px"> <img src="img/search.png" width="20px"></td>
		<td></td>
		<td colspan="2" style="text-align: right;"><img src="img/cart.png" width="30px">
		<img src="img/email.png" width="30px">
	<img src="img/notif.png" width="30px"></td>
	
		<td style="color: white;"><button class="btn" style="border-radius : 10px"><h4 style="color:white">Semua Produk</h4></button></td>

		<td  style=" color:white;"><button class="btn btn-primary" style="border-radius : 10px"> <h4 style="text-align:center;">ADMIN</h4></button></td>

		<td><img src="img/toko.png" width="30px"></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><p style="color:white">KATEGORI</p></td>
		<td><p style="color:white">Sepatu </p></td>
		<td><p style="color:white">Meja</p></td>
		<td><p style="color:white">Laptop</p></td>
		<td><p style="color:white">DLL</p></td>
	</tr>
</table></div>






<div class="jumbo">	
<img src="img/iconn.png" width="100%" height="550px;" style="border-bottom-right-radius:300px"></div>

<div class="jumbotron jumbotron-fluid">
	<div class="contoh">
		<h1 class="display-4" ><b style="font-family: arial; color: black;">BELI HARI INI DAPAT <span><img src="disk.png" width="150px"></span></b></h1>

		<a href="#" class="btn btn-primary" style="border-radius:200px">KLIK DI SINI</a>
	</div>
</div>












<!-- class container buat barang
-->


<img src="img/img/prive.png" width="100px" style="float:right; left: 80%; z-index: 2;  margin-top:-180px; position: absolute;">
<div class="container">
<?php
include_once 'connect.php';

$panggil_tas = mysqli_query($link, "SELECT * FROM produk WHERE jenis='tas' ORDER BY harga ASC LIMIT 1");
while ($panggil1 = mysqli_fetch_array($panggil_tas)){

	$panggil_laptop = mysqli_query($link, "SELECT * FROM produk WHERE jenis='laptop' ORDER BY harga ASC LIMIT 1");
while ($panggil2 = mysqli_fetch_array($panggil_laptop)){
	$panggil_baju = mysqli_query($link, "SELECT * FROM produk WHERE jenis='baju' ORDER BY harga ASC LIMIT 1");
while ($panggil3 = mysqli_fetch_array($panggil_baju)){


	$panggil_sepatu = mysqli_query($link, "SELECT * FROM produk WHERE jenis='sepatu' ORDER BY harga ASC LIMIT 1");
while ($panggil4 = mysqli_fetch_array($panggil_sepatu)){

	$panggil_buku = mysqli_query($link, "SELECT * FROM produk WHERE jenis='buku' ORDER BY harga ASC LIMIT 1");
while ($panggil5 = mysqli_fetch_array($panggil_buku)){


	$img = 'upload/'.$panggil1['gambar'];
	$img1 = 'upload/'.$panggil2['gambar'];
	$img2 = 'upload/'.$panggil3['gambar'];
	$img3 = 'upload/'.$panggil4['gambar'];
	$img4 = 'upload/'.$panggil5['gambar'];


?>

	<div class="row justify-content-center">
		<div class="col-lg-12 panel">
<h1 style="color:black; text-align: left;">Kategori Pilihan</h1>
			<div class="row">
			<div class="col-lg" style="margin-top:20px">
				
<div class="card" style="width: 18rem;">
  <img src="<?php echo $img;?>" class="card-img-top" alt="..." style="height:150px">
  <div class="card-body">
    <h5 class="card-title" style="color:black;">Tas Murah</h5>
    <p class="card-text" style="color:black;">Berbagai macam tas tersedia</p><a href="Tas.php" class="btn btn-primary" style="float:left; width:80px">Detail </a> | <a  class="btn btn-danger" style="float:right; width:80px"><?php echo number_format($panggil1['harga'],0); ?></a>
  </div>
</div>


			</div>
		
			<div class="col-lg" style="margin-top:20px">
				<div class="card" style="width: 18rem;" >
  <img src="<?php echo $img1;?>" class="card-img-top" alt="..." style="height:150px">
  <div class="card-body">
    <h5 class="card-title" style="color:black;">Elektronik Murah</h5>
    <p class="card-text" style="color:black;">Berbagai macam laptop  tersedia</p>
    <a href="elektronik.php" class="btn btn-primary" style="float:left; width:80px">Detail </a> | <a  class="btn btn-danger" style="float:right; width:80px"><?php echo number_format($panggil2['harga'], 0);?></a>
  </div>
</div>
			</div>


			<div class="col-lg" style="margin-top:20px">
				<div class="card" style="width: 18rem;" >
  <img src="<?php echo $img2;?>" class="card-img-top" alt="..."style="height:150px">
  <div class="card-body">
    <h5 class="card-title" style="color:black;">Baju Termurah</h5>
    <p class="card-text" style="color:black;">Berbagai macam baju tersedia</p>
    <a href="pakaian.php" class="btn btn-primary" style="float:left; width:80px">Detail </a> | <a class="btn btn-danger" style="float:right; width:80px"><?php echo number_format($panggil3['harga'], 0);?></a>
  </div>
</div>

			</div>

	
			<div class="col-lg"  style="margin-top:20px">
				<div class="card" style="width: 18rem;" >
  <img src="<?php echo $img3;?>" class="card-img-top" alt="..."style="height:150px">
  <div class="card-body">
    <h5 class="card-title" style="color:black;">Sepatu Termurah</h5>
    <p class="card-text" style="color:black;">Berbagai macam sepatu tersedia</p>
    <a href="sepatu.php" class="btn btn-primary" style="float:left; width:80px">Detail</a>
     | <a class="btn btn-danger" style="float:right; width:80px"><?php echo number_format($panggil4['harga'],0);?></a>
  </div>
</div>
			</div>



<div class="col-lg" style="margin-top:20px">
				<div class="card" style="width: 18rem;" >
  <img src="<?php echo $img4;?>" class="card-img-top" alt="..."style="height:150px">
  <div class="card-body">
    <h5 class="card-title" style="color:black;">Buku Termurah</h5>
    <p class="card-text" style="color:black;">Berbagai macam buku tersedia</p>
    <a href="buku.php" class="btn btn-primary" style="float:left; width:80px">Detail </a> | <a class="btn btn-danger" style="float:right; width:80px"><?php echo number_format($panggil5['harga'], 0);?></a>
  </div>
</div>

<?php
}
}
}
}
}	

?>
			</div>
			<div class="col-lg" style="margin-top:20px">
				<div class="card" style="width: 18rem;" >
  <img src="img/Diskon.png" class="card-img-top" alt="..."style="height:150px">
  <div class="card-body">
    <h5 class="card-title" style="color:black;">No Detected</h5>
    <p class="card-text" style="color:black;">Tidak dapat disentuh</p>
    <a href="#" class="btn btn-primary" style="float:left; width:80px">Detail </a> | <a href="#" class="btn btn-danger" style="float:right; width:80px">$10.000</a>
  </div>
</div>
			</div>
			<div class="col-lg" style="margin-top:20px">
				<div class="card" style="width: 18rem;" >
  <img src="img/Diskon.png" class="card-img-top" alt="..."style="height:150px">
  <div class="card-body">
    <h5 class="card-title" style="color:black;">No Detected</h5>
    <p class="card-text" style="color:black;">Tidak dapat disentuh</p>
    <a href="#" class="btn btn-primary" style="float:left; width:80px">Detail </a> | <a href="#" class="btn btn-danger" style="float:right; width:80px">$10.000</a>
  </div>
</div>
			</div>
			<div class="col-lg" style="margin-top:20px">
				<div class="card" style="width: 18rem;" >
  <img src="img/Diskon.png" class="card-img-top" alt="..."style="height:150px">
  <div class="card-body">
    <h5 class="card-title" style="color:black;">No Detected</h5>
    <p class="card-text" style="color:black;">Tidak dapat disentuh</p>
    <a href="#" class="btn btn-primary" style="float:left; width:80px">Detail </a> | <a href="#" class="btn btn-danger" style="float:right; width:80px">$10.000</a>
  </div>
</div>
			</div>



		</div>
		
			

		</div>
	</div>
	<div class="tombol" style="margin-top:-150px; text-align:center; z-index:4px; position:absolute; margin-left: 40%;">
<a href="tas.php" class="btn btn-danger" style="color:white; width: 200px; border-radius: 10px;">Lihat Lebih Banyak Lagi</a>
</div>





<!-- class banner
-->

<table border="1" width="100%">
	
<img src="img/admin.png" width="150px">

		 <tr>
		 <td><h1>BELANJA SESUAIKAN DENGAN KEBUTUHAN MU !!!</h1></td>
		 <td><h5><img src="img/tangan.png" width="70px"></h5><br>
		 <center><h2>Belanja Kekinian</h5></center>
		 </td>
		 <td width="10%"></td>
	</tr>
</table>





</div>



<!-- class footer 
-->


<div class="footer">
<table  width="100%" style="margin-top:50px">
	<tr style="background-color:white;">
		 <td width="10%"></td>
		 <td width="20%"></td>
		 <td width="20%"></td>
		 <td width="20%"></td>
		 <td width="10%"></td>
	</tr>
	<tr style="background-color:white;">
		 <td></td>
		 <td></td>
		 <td></td>
		 <td></td>
		 <td></td>
	</tr>
	<tr style="background-color:white;">
		 <td></td>
		 <td><p style="color:black;"><b>Tentang ShopPedia</b></p></td>
		 <td></td>
		 <td><img src="img/iconn.png" width="200px"></td>
		 <td></td>
	</tr>
	<tr style="background-color:white;">
		 <td></td>
		 <td><p>Hubungi</p></td>
		 <td></td>
		 <td><p><b>Download Aplikasi Hanya di</b></p></td>
		 <td></td>
	</tr>
	<tr style="background-color:white;">
		 <td></td>
		 <td><p>Karir</p></td>
		 <td></td>
		 <td><img src="img/app.png" width="100px"> <img src="img/google.png" width="100px"></td>
		 <td></td>
	</tr>
	<tr style="background-color:white;">
		 <td></td>
		 <td><p>Blog</p></td>
		 <td><p style="text-align:right; margin-bottom:0px;">Ikuti Juga Kami</p></td>
		 <td><img src="img/email.png" width="30px; " style=" height:36px;">  ||  <img src="img/igya.png" width="30px;" style=" height:30px">  ||  <img src="img/WA.png" width="30px;" style=" height:35px"></td>
		 <td></td>
	</tr>	
	<tr>
		
		<td colspan="5" class="text-center" style="text-align:center; background-color: #606060;"><h5 style="color:white; padding: 20px">&copy; 2022 - reusmana sujani</h5></td>
	</tr>
</table>
</div>






</body>
</html>