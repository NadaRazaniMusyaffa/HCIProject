<?php  
	$server = "localhost";
	$user = "root";
	$pass = "";
	$database = "proyekhci";

	$mysqli = mysqli_connect($server, $user, $pass, $database) or die(mysqli_error($mysqli));
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Category</title>
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
			<a href="index.php" class="nav-link text-white">Category</a>
			<button class="navbar-toggler ms-auto text-end" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
	      		<span class="navbar-toggler-icon"></span>
	    	</button>
			<div class="collapse navbar-collapse text-end ps-5 mx-auto" id="mynavbar">
				<button type="submit" name="cari" class="btn-dark me-2 d-block mx-auto mt-2" data-bs-toggle="collapse" data-bs-target="#mysearch">
					<i class="fas fa-search"></i>
				</button>
				<div class="collapse" id="mysearch">
					<form action="" method="post" class="d-flex mt-2">
						<input class="form-control form-control-sm" type="text" placeholder="Search" name="keyword" autocomplete="off">
		        		<button class="btn btn-dark btn-sm me-2" type="submit" name="cari">Search</button>
					</form>
				</div>
				<button type="button" class="btn btn-dark mt-2 notification" data-bs-toggle="collapse" data-bs-target="#dropdown">
				      <span><i class="far fa-bell"></i></span>
				      <span class="badge">4</span>
				</button>
				<div class="collapse mt-2" id="dropdown">
				    
				     <ul class=" list-group list-group-vertical ms-2" style=" list-style-type: none; background-color: white;">
				      <?php 
			 			$no = 0;
			 			$kategori = array("sepatu", "tas", "pakaian", "aksesoris", "sport");
			 			for ($i= 0; $i  < 5; $i++):
			 				$tampil = mysqli_query($mysqli, "SELECT * FROM $kategori[$i] WHERE stok<10");
			 				while ($data = mysqli_fetch_array($tampil)):
			 					$no++;
		 						if ($no == 5) {
			      					break;
			      				}
				 		?>
				      <li><a class="dropdown-item" href="<?=$kategori[$i]?>.php"><?=$data['nama']?></a></li>
				      		<?php endwhile; ?>
				      	<?php 
				      	if ($no == 5) {
				      		break;
				      	}
				      	endfor; 
				      	?>
				      <li><hr class="dropdown-divider"></hr></li>
				      <li><a class=" dropdown-item" href="notif.php">Selengkapnya</a></li>
				    </ul>
				  </div>
			</div>
		</div>	
	</nav>
	</nav>

	<div class="container-fluid">
		<div class="row">
			<div class="col mx-auto text-center mt-4">
				<h2><?php echo $_SESSION["category"];?> </h2>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col">
				<button type="button" class="btn btn-dark">
				<a href="tambah.php" class="text-decoration-none text-white">Tambah</a>
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
						<?php 
			 			$no = 1;
			 			$lala = $_SESSION["database"];
			 			$tampil = mysqli_query($mysqli, "SELECT * FROM $lala order by no desc");
			 			while ($data = mysqli_fetch_array($tampil)): 
			 			?>
						<tr>
							<td><?=$no++;?></td>
							<td><img src="data:image/png;base64, <?=base64_encode($data['gambar'])?>" width="100%" height="100%"></td>
							<td><?=$data['nama']?></td>
							<td><?=$data['harga']?></td>
							<td><?=$data['stok']?></td>
							<td>
								<button type="button" class="btn btn-dark">
									<a href="edit.php" class="text-decoration-none text-white">Edit</a>
								</button>
								<button type="button" class="btn btn-dark">
									<a href="#" class="text-decoration-none text-white">Hapus</a>
								</button>
							</td>
						</tr>
					<?php endwhile; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

<script src="sorting.js"></script>


</body>
</html>