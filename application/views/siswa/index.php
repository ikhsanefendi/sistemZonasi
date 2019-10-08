<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

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
	<h1 class="text-center">Data Siswa</h1>

	<a href="<?php echo site_url('Siswa/tambah')?>" class="btn btn-primary">Tambah Siswa</a>

	<table class="table table-striped">
    <thead>
        <tr>
            <td>Id Siswa</td>
            <td>Nama Siswa</td>
            <td>Nama Sekolah</td>
            <td>Nilai UN</td>
            <td>Nilai Sekolah</td>
            <td>action</td>
        </tr>
    </thead>
   	<?php foreach ($siswa as $key => $siswa) {
	?>
    <tr>
        <td><?php echo $siswa->id?></td>
        <td><?php echo $siswa->nama_siswa?></td>
        <td><?php echo $siswa->nama_sekolah?></td>
        <td><?php echo $siswa->jumlah_un?></td>
        <td><?php echo $siswa->jumlah_nilai_sekolah?></td>
        <td><a href="<?php echo site_url('Siswa/delete/'.$siswa->id)?>" class="glyphicon glyphicon-trash"></a></td>

    </tr>
   	<?php } ?>

</table>
	</body>
</html>