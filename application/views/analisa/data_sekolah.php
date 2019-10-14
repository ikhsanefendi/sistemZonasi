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
	            <td>Id Sekolah</td>
	            <td>Nama Sekolah</td>
	            <td>Alamat Sekolah</td>
	            <td>Nilai Akreditasi Sekolah</td>
	            <td>Jarak dari SMA</td>
	            <td>Jumlah Guru</td>
	            <td>Penilaian</td>
	            <td>Peringkat</td>

	        </tr>
	    </thead>
	   	<?php foreach ($smp as $key => $smp) { ?>
		    <tr>
				<?php $max_a=$max_akreditasi->nilai_akreditasi;
				$max_g=$max_guru->jumlah_guru;
				 ?>
		    	<?php $nilai=$smp->nilai_akreditasi/$max_a*0.6+$smp->jumlah_guru/$max_g*0.4; ?>
		        <td><?php echo $smp->id?></td>
		        <td><?php echo $smp->nama?></td>
		        <td><?php echo $smp->id_lokasi?></td>
		        <td><?php echo $smp->nilai_akreditasi?></td>
		        <td></td>
		        <td><?php echo $smp->jumlah_guru?></td>
				<td><?php echo $nilai ?></td>
				<td></td>

				<td></td>

		    </tr>
	   	<?php } ?>
		
	</div>
		<!-- jQuery -->
		
	</body>
</html>