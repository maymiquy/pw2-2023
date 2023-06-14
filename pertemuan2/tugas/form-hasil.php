<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Pendaftar</title>
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
	
<body class="bg-dark p-3">
	<div class="container">
		<h2 class="text-white text-center p-2 rounded mb-4 shadow-sm">Data Pendaftar</h2>
		<table class="table table-dark table-hover rounded shadow-lg">
			<thead>
				<tr>
					<th class="border-0">No</th>
					<th class="border-0">Nama Lengkap</th>
					<th class="border-0">Email</th>
					<th class="border-0">Alamat</th>
					<th class="border-0">Telepon</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Who's Who</td>
					<td>who@gmail.com</td>
					<td>Depok</td>
					<td>+628987654321</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Miqdam</td>
					<td>miq@gmail.com</td>
					<td>Sukabumi</td>
					<td>+628123456789</td>
				</tr>
				<?php
				  /* Task 2
				    Tangkap dan tampilkan data dari form_daftar.
						Berikan error handling
				  */
				  if (isset($_POST['submit'])){
					$nama_lengkap = $_POST['nama_lengkap'];
        			$email = $_POST['email'];
        			$alamat = $_POST['alamat'];
        			$telepon = $_POST['telepon'];
					?>
					<tr>
						<td>3</td>
						<td><?php echo $nama_lengkap?></td>
						<td><?php echo $email?></td>
						<td><?php echo $alamat?></td>
						<td><?php echo $telepon?></td>
					</tr>
					<?php
				  }
				?>
			</tbody>
		</table>
	</div>
	</body>
	</html>
