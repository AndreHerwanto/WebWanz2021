<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>RegistrationForm WanzHosting</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- MATERIAL DESIGN ICONIC FONT -->
	<!-- STYLE CSS -->
	<link rel="stylesheet" type="text/css" href=" <?php echo base_url("css/stylefrom.css"); ?>">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<div class="navbar">
		<a class="active" href="#"><i class="fa fa-fw fa-home"></i> Home</a>

	</div>


</head>


<body>
	<div class="wrapper">

		<div class=" inner">

			<form action="productdata/save" method="POST">
				<?= csrf_field(); ?>

				<h3>Registration Form</h3>

				<div class="form-wrapper">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" required="" id="nama" name="nama" autofocus>
				</div>
				<div class="form-wrapper">
					<label for="email">Email</label>
					<input type="email" class="form-control" required="" id="email" name="email">
				</div>
				<div class="form-wrapper">
					<label for="notelepon">No Telepon</label>
					<input type="number" class="form-control" required="" id="notelepon" name="notelepon">
				</div>
				<div class="form-wrapper">
					<label for="namadomain">Nama Domain</label>
					<input type="text" class="form-control" required="" id="namadomain" name="namadomain">
				</div>
				<div class="from-wrapper">
					<label for="paketdomain">Paket Domain</label>
					<select class="form-control" aria-label="Default select example" id="paketdomain" name="paketdomain">
						<option>---Pilih Paket Anda---</option>
						<option value="PERSONAL">PERSONAL</option>
						<option value="COMMERCIAL">COMMERCIAL</option>
						<option value="BUSINESS">BUSINESS</option>
					</select>
				</div>

				<button type="submit">Register Now</button>
			</form>

			<?php if (session()->getFlashdata('pesan')) : ?>
				<div class="alert alert-success" role="alert">
					<?= session()->getFlashdata('pesan'); ?>
				</div>
			<?php endif;  ?>

		</div>
	</div>


</body>

</html>