<!doctype html>
<html lang="en">
  <head>
  	<title>List Pendaftar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="list/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-3 text-center mb-5">
                <!-- <a href="main.html" role="button" class="btn btn-sm btn-danger">Kembali</a> -->
                </div>
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">List Siswa Pendaftar</h2>
				</div>
			<!-- </div>
			<div class="row justify-content-center"> -->
				<div class="col-md-3 text-center mb-5">
				<a href="form_siswa.html" role="button" class="btn btn-sm btn-primary"><b>Tambah Siswa</b></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table table-striped">
						  <thead>
						    <tr>
						      <th>ID</th>
						      <th>Nama</th>
						      <th>Alamat</th>
						      <th>Jenis Kelamin</th>
						      <th>Agama</th>
						      <th>Sekolah Asal</th>
							  <th></th>
						    </tr>
						  </thead>
						  <tbody>
						    <?php
							include('connection.php');
							$i = 1;
						
							$q = $conn->real_escape_string('SELECT * FROM calon_siswa');
							$q = $conn->query($q); 
							while($res = $q->fetch_assoc()):
							?>

							<tr>
								<!-- <?php $i++ ?> -->
								<td class="align-middle"><?= $res['id'] ?></td>
								<td class="align-middle"><?= $res['nama'] ?></td>
								<td class="align-middle"><?= $res['alamat'] ?></td>
								<td class="align-middle"><?= $res['jenis_kelamin'] ?></td>
								<td class="align-middle"><?= $res['agama'] ?></td>
								<td class="align-middle"><?= $res['sekolah_asal'] ?></td>

								<td><a href="edit_siswa.php?id=<?= $res['id']?>" role="button" class="btn btn-sm btn-primary">Edit</a>
								<a href="delete_siswa.php?id=<?= $res['id']?>" onClick="return confirm('Are you sure you want to delete?')" role="button" class="btn btn-sm btn-danger">Hapus</a></td>
							
							</tr>
							<?php endwhile; ?>
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="list/js/jquery.min.js"></script>
  <script src="list/js/popper.js"></script>
  <script src="list/js/bootstrap.min.js"></script>
  <script src="list/js/main.js"></script>

	</body>
</html>

