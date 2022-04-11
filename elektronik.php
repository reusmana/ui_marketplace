<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="css/bootstrap.min.css" rel="stylesheet" >
	<style type="text/css">
		body{
			background-color: #0088BB;
		}

		.tab1{

position: block;
z-index: 3;
transition: top 0.3s;
background-color: #606060;

}

.footer p{
font-family: sans-serif;
font-style: italic;
font-size: 20px;
}

.card img{
	width: 200px;
	height: 200px;
	padding: 1px;
	transition: transform.2s;
	margin: auto;
	border-radius: 20px;
}

.card img:hover{
	transform: scale(1.1);

}
	</style>


</head>
<body>
<?php

include_once 'panggil_header.php';
?>







<div class="apa">

<h1 style="color:white; margin-top: 20px; margin-left: 20px; padding:20px">Semua pilihan mu ada di sini <img src="img/tangan.png" width="50px">Produk Elektronik</h1>

</div>



	<?php 
include_once 'navbar2.php';
	include_once 'connect.php';

$gk = mysqli_query($link, "SELECT * FROM produk WHERE jenis = 'laptop' ORDER BY id_produk DESC");
		

	while ($gambar = mysqli_fetch_array($gk)){
		$img = 'upload/'.$gambar['gambar'];
?>
<table  style="float: right; margin-right:3%; text-align:center; margin-top:100px;">
	<thead>
		<tr>
			<td>
				<p style="color:black; font-size: 20px; line-height:10px;"><b></b></p>

			</td>
		</tr>
		

	</thead>
<tbody>

<tr>
		<td>
		
		
<div class='card' style='width: 18rem; background-color: #0088BB; border-radius: 10px; margin-bottom:100px;'>
  <img src="<?php echo $img;?>" class='card-img-top' alt='...' style="border-radius: 20px	;">
	<div class='card-body' style="background-color:white;">
    <h5 class='card-title'><?php echo $gambar['nama_produk'];?></h5>
    <p class='card-text' >Lihat Deskripsi Produk dengan menekan tombol Read More</p>
  <?php
   echo "  <a href='detail.php?id_produk=".$gambar['id_produk']."' class='btn btn-primary' style='float:left; width:80px'>Read More</a> ";?> <a  class="btn btn-danger" style="float:right; width:80px"><?php echo number_format($gambar['harga'],0); ?></a>
  	</div>
</div>

		</td>		
	</tr>	
</tbody>
	

	

</table>



<?php 
}
include_once 'panggil_footer.php';
?>

<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>