<?php 
session_start();
$conn = mysqli_connect("localhost", "root", "", "proyekhci");

function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	if (!$result) {
		echo mysqli_error($conn);
	}
	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}

function upload(){
	$namafile = $_FILES["gambar"]["name"];
	$ukuranfile = $_FILES["gambar"]["size"];
	$error = $_FILES["gambar"]["error"];
	$tmpname = $_FILES["gambar"]["tmp_name"];

	if( $error == 4){
		echo "
		<script>
			alert('Gambar belum diupload');
		</script>
		";

		return false;
	}

	$ekstensigambarvalid = ['jpg', 'jpeg', 'png'];
	$ekstensigambar = explode('.', $namafile);
	$ekstensigambar = strtolower(end($ekstensigambar));
	if( !in_array($ekstensigambar, $ekstensigambarvalid)){
		echo "
		<script>
			alert('File gambar tidak didukung');
		</script>
		";
	}


	if($ukuranfile > 2000000){
		echo "
		<script>
			alert('Ukuran gambar terlalu besar');
		</script>
		";
	}

	


	move_uploaded_file($tmpname, $namafile);
	return $namafile;
}

function update($data){
	global $conn;
	$no = $data["no"];
	$nama = htmlspecialchars($data["nama"]);
	$harga = htmlspecialchars($data["harga"]);
	$stok = htmlspecialchars($data["stok"]);
	$gambarlama = htmlspecialchars($data["gambarlama"]);

	if($_FILES['gambar']['error'] === 4){
		$gambar = $gambarlama;
	}else{
		$gambar = upload();
	}
	$tabel = strtolower($_SESSION["category"]);


	$query = "UPDATE ".$tabel. " SET
				nama = '$nama',
				harga = '$harga',
				stok = '$stok',
				gambar = '$gambar'
				WHERE no=$no
				";
	var_dump($query);
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}
$no = $_GET["no"];
$tabel = strtolower($_SESSION["category"]);

$data = query("SELECT * FROM ".$tabel." WHERE no=$no")[0];

if (isset($_POST["submit"])) {
	if (update($_POST) > 0){
		echo "
		<script>
			alert('Data berhasil di update');
			document.location.href = 'category.php';
		</script>
	";
	}
	else{
		echo "
		<script>
			alert('Data gagal di update');
		</script>
	";
	}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  	<script src="https://kit.fontawesome.com/9b8f939fef.js" crossorigin="anonymous"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
		<div class="container-fluid">
			<h3 class="text-white">LOGO</h3>	
		</div>	
	</nav>

	<div class="container-fluid">
		<div class="row">
			<div class="col mx-auto text-center mt-4">
				<h2>Edit</h2>
			</div>
		</div>
		<div class="row">
			<div class="col table-responsive mt-4">
				<form action="" method="post" enctype="multipart/form-data">
					<input type="hidden" name="no" value="<?= $data["no"]; ?>">
					<input type="hidden" name="gambarlama" value="<?= $data["gambar"]; ?>">
					<table class="table table-bordered border-dark mt-2 text-center" >
						<tr class="table-dark">
							<td>No</td>
							<th>Gambar</th>
							<th>Nama</th>
							<th>Harga</th>
							<th>Stok</th>
							<th>Option</th>
						</tr>
						<tr >
							<td><?= $data["no"]; ?></td>
							<td >
								<img src="<?= $data["gambar"]; ?>">
								<input  type="file" name="gambar" id="gambar" style="height: 30px;">
							</td>
							<td>
								<input type="text" name="nama" id="nama" style="height: 30px;" value="<?= $data["nama"]; ?>">
							</td>
							<td>
								<input type="text" name="harga" id="harga" style="height: 30px;" value="<?= $data["harga"]; ?>">
							</td>
							<td>
								<input type="text" name="stok" id="stok" style="height: 30px;" value="<?= $data["stok"]; ?>">
							</td>
							<td>
								<button class="btn btn-dark text-white mt-2" type="submit" name="submit">
									Simpan
								</button>
								<button type="button" class="btn btn-dark mt-2">
									<a href="category.php" class="text-white text-decoration-none">Kembali</a>
								</button>
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>

</body>
</html>
