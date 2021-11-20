<!DOCTYPE html>
<html>
<head>
	<title>Tambah</title>
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
				<h2>Tambah</h2>
			</div>
		</div>
		<div class="row">
			<div class="col table-responsive mt-4">
				<form>
					<table class="table table-bordered border-dark mt-2 text-center" >
						<tr class="table-dark">
							<th>Gambar</th>
							<th>Nama</th>
							<th>Harga</th>
							<th>Stok</th>
							<th>Option</th>
						</tr>
						<tr >
							<td>
								<input type="file" name="gambar" id="gambar" style="height: 30px;">
							</td>
							<td>
								<input type="text" name="nama" id="nama" style="height: 30px;">
							</td>
							<td>
								<input type="text" name="harga" id="harga" style="height: 30px;">
							</td>
							<td>
								<input type="text" name="stok" id="stok" style="height: 30px;">
							</td>
							<td>
								<button type="submit" name="submit" class="btn btn-dark">
									<a href="category.php" class="text-white text-decoration-none">Tambah</a>
								</button>
								<button type="button" class="btn btn-dark">
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