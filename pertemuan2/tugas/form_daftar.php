<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pendaftaran</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
	<style>
		label {
			font-weight: bold;
		}
	</style>
</head>
<body class="bg-dark text-light">
	<div class="container shadow-lg mx-auto mt-5">
		<h1 class="text-light text-center mt-2" data-aos="fade-up">Formulir Pendaftaran</h1>
		<form method="POST" action="form_hasil.php">
			<div class="form-group" data-aos="fade-up" data-aos-delay="100">
				<label for="nama_lengkap">Nama Lengkap</label>
				<input name="nama_lengkap" type="text" class="form-control" id="nama_lengkap">
			</div>
			<div class="form-group" data-aos="fade-up" data-aos-delay="200">
				<label for="email">Email</label>
				<input name="email" type="email" class="form-control" id="email">
			</div>
			<div class="form-group" data-aos="fade-up" data-aos-delay="300">
				<label for="alamat">Alamat</label>
				<textarea name="alamat" class="form-control" id="alamat"></textarea>
			</div>
			<div class="form-group" data-aos="fade-up" data-aos-delay="400">
				<label for="telepon">Telepon</label>
				<input name="telepon" type="tel" class="form-control" id="telepon">
			</div>
			<button name="submit" class="btn btn-primary mb-3" data-aos="fade-up" data-aos-delay="500">Kirim</button>
		</form>
	</div>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script> 
<script> 
AOS.init({
    duration: 800,
    easing: 'ease-in-out',
    once: true
    }); 
</script>
</body>
</html>
