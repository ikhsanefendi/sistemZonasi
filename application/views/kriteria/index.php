<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Halaman Kriteria</title>

		<!-- Bootstrap CSS -->
			<script src="<?php echo base_url('assets/jquery.min.js') ?>"></script>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
	<h1 class="text-center">Data Kriteria</h1>

	<a href="<?php echo site_url('Kriteria/tambah')?>" class="btn btn-primary">Tambah Kriteria</a>

	<table class="table table-striped">
    <thead>
        <tr>
            <td>no</td>
            <td>Nama Kriteria</td>
            <td>Nilai Kriteria</td>
            <td colspan="2">Action</td>
        </tr>
    </thead>
   	<?php $no=0; foreach ($kriteria as $key) { $no++;
	?>
    <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $key->nama?></td>
        <td><?php echo $key->nilai?></td>
        <td><a href="<?php echo site_url('Kriteria/delete/'.$key->id)?>" class="glyphicon glyphicon-trash"></a></td>

    </tr>
   	<?php } ?>

</table>
	</body>
</html>