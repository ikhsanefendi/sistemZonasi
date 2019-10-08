<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Data Ruangan</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>

	<div class="col-md-12">
	<h1 class="text-center">Data Sekolah SMA</h1>
	<table class="table table-striped">
	    <thead>
	        <tr>
	            <td>Id Siswa</td>
	            <td>Nama Siswa</td>
	            <td>Nama Sekolah</td>
	            <td>Jarak</td>
	            <td>Nama SMA</td>
	            <td>Penilaian</td>
	            <td>Peluang Masuk</td>

	        </tr>
	    </thead>
	   	<?php foreach ($siswa as $key) { ?>
		    <tr>
		
		        <td><?php echo $key->id?></td>
		        <td><?php echo $key->nama_siswa?></td>
		        <td><?php echo $key->nama_sekolah?></td>
		        <td><?php echo $key->jumlah_un ?></td>
				<td></td>

		    </tr>
	   	<?php } ?>
		
	</div>
		<!-- jQuery -->
		
	</body>
</html>