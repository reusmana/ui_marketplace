<?php
ob_start();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tugas DataTabel</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">


  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>



	<link href="css/bootstrap.min.css" rel="stylesheet" >

</head>



<body>

<?php
include_once 'panggil_header.php';

?>



<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left: 100px; margin-top: 20px; font-size:30px">
  Insert Data
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

      	<div class="container">
      		<div class="row">
      			<div class="col-md-12">
<form action="read.php" method="post" name="form1" enctype="multipart/form-data">
			<table width="100%" class="table-bordered" cellpadding="10">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama_produk" class="form-control"></td>
			</tr>
						<tr>
				<td>Gambar</td>
				<td><input type="file" name="file" class="form-control"></td>
			</tr>
						<tr>
				<td>Deskripsi</td>
				<td><textarea class="form-control" rows="3" name="deskripsi"></textarea> </td>
			</tr>
									
						<tr>
				<td>Jenis</td>
				<td><select class="form-select" name="jenis" aria-label="Default select example">
  <option selected >Open this select menu</option>
  <option value="tas">Tas</option>
  <option value="laptop">Laptop</option>
  <option value="baju">Baju</option>
  <option value="sepatu">Sepatu</option>
  <option value="buku">Buku</option>

</select>
					</td>
			</tr>
						<tr>
				<td>Harga</td>
				<td><input type="number" name="harga" class="form-control"></td>
			</tr>

			

					
			</table>
	
	</div></div></div>

      </div>
    
      <div class="modal-footer">
        <button type="button" class="form-control btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" name="submit_add" class="form-control btn btn-primary" value="Save">
        	</form>
      </div>
    </div>
  </div>
</div>





<!--tabelllll



	-->
	
	<div class="container">
	<div class="row">
		<div class="col-md-12">



	<table id="tabelurang" class=" table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama produk</th>
				<th>Gambar</th>	
				<th>Deskripsi</th>
				<th>Jenis</th>
				<th>Harga</th>
				<th>Terakhir Edit</th>
				<th>Aksi</th>
			</tr>
			
		</thead>


		<tbody>
			
<?php
include_once 'connect.php';
$no=1;

$query_read = mysqli_query($link, "SELECT * FROM produk ORDER BY nama_produk ASC");

while($produk = mysqli_fetch_array($query_read)){

		$img = 'upload/'.$produk['gambar'];

?>
<tr class="table-active">
	<td><?php echo $no++; ?></td>
	<td><?php echo $produk['nama_produk'];?></td>
	<td><img src="<?php echo $img;?>" style="width: 150px; height: auto;"></td>
	<td><?php echo $produk['deskripsi'];?></td>
	<td><?php echo $produk['jenis'];?></td>
	<td><?php echo number_format($produk['harga']);?></td>
	<td><?php echo $produk['tgl_upload'];?></td>
	<?php
echo"
	<td><a href='update.php?id_produk=".$produk['id_produk']."' class='btn btn-primary'>Edit</a> || <a href='delete.php?id_produk=".$produk['id_produk']."' class='btn btn-danger'>Delete</a><td>
	";
	?>
</tr>
	</tbody>
		<?php
} 
?>
	</table>

</div></div></div>


<?php

include_once 'panggil_footer.php';
?>
	

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
<script type="text/javascript">
		$(document).ready( function () {
    $('#tabelurang').DataTable();
} );
	

$(document).ready( function () {
    $('#tabelurang').DataTable();
} );
	</script>


	<?php 

if(isset($_POST['submit_add'])){
$nama_produk = $_POST['nama_produk'];
$deskripsi = $_POST['deskripsi'];
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];





	$target = "upload/";
$gambar = basename($_FILES['file']['name']);
$targetFilePath = $target.$gambar;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
	$allowType = array('jpg', 'png', 'jpeg', 'gif');
	if(in_array($fileType, $allowType)){
		if(move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)){
			$insert = mysqli_query($link, "INSERT INTO produk (id_produk, nama_produk, gambar, deskripsi, jenis, harga, tgl_upload) VALUES ('', '$nama_produk','".$gambar."','$deskripsi','$jenis','$harga', NOW())");

				if($insert == false){
					die("submit gagal ".mysqli_connect_error());
				}else{
					echo "submit berhasil";
					header("Location:read.php");				
				}
		}else{
			echo "upload error";
		}

	}else{
	alert('bukan jpg');
	}

print_r($_POST);
}

ob_end_flush();
?>