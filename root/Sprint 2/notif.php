<!DOCTYPE html>
<html>
<head>
	<title>Notification</title>
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
				<h2>Notification</h2>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col">
				<button type="button" class="btn btn-dark">
				<a href="index.php" class="text-decoration-none text-white">Home</a>
				</button>
			</div>
		</div>
		<div class="row">
			<div class="col table-responsive">
				<table class="table table-bordered border-dark mt-2 text-center" >
					<thead>
						<tr class="table-dark">
						<th>No.</th>
						<th>Gambar</th>
						<th>Nama</th>
						<th>Harga</th>
						<th>Stok</th>
						<th>Option</th>
					</tr>
					</thead>
					<tbody>
						<tr>
						<td>1</td>
						<td>
							<img src="download.jpg">
						</td>
						<td>B</td>
						<td>Rp 10.000</td>
						<td>100</td>
						<td>
							<button type="button" class="btn btn-dark">
								<a href="edit.php" class="text-decoration-none text-white">Edit</a>
							</button>
							<button type="button" class="btn btn-dark">
								<a href="#" class="text-decoration-none text-white">Hapus</a>
							</button>
						</td>
					</tr>
					<tr>
						<td>2</td>
						<td>
							<img src="download.jpg">
						</td>
						<td>C</td>
						<td>Rp 8.000</td>
						<td>200</td>
						<td>
							<button type="button" class="btn btn-dark">
								<a href="edit.php" class="text-decoration-none text-white">Edit</a>
							</button>
							<button type="button" class="btn btn-dark">
								<a href="#" class="text-decoration-none text-white">Hapus</a>
							</button>
						</td>
					</tr>
					<tr>
						<td>3</td>
						<td>
							<img src="download.jpg">
						</td>
						<td>A</td>
						<td>Rp 12.000</td>
						<td>50</td>
						<td>
							<button type="button" class="btn btn-dark">
								<a href="edit.php" class="text-decoration-none text-white">Edit</a>
							</button>
							<button type="button" class="btn btn-dark">
								<a href="#" class="text-decoration-none text-white">Hapus</a>
							</button>
						</td>
					</tr>
					</tbody>
					
				</table>
			</div>
		</div>
	</div>

</body>
</html>