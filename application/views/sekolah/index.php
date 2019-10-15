<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<!-- Latest compiled and minified CSS -->

          <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/plugins/datatables/dataTables.min.css" /> 
          <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
          <script src="<?php echo base_url()?>assets/js/plugins/datatables/dataTables.min.js"></script>
   		 
    </head>

    <script type="text/javascript">
    	$(document).ready(function() {
    	$('#sekolah').DataTable();
		} );
	</script>



		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
	<br></br>
	<h1 class="text-center">Data Sekolah SMP</h1>

	<a href="<?php echo site_url('Sekolah/tambah')?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah Sekolah</a>
	<br></br>

	<table class="table table-striped"  id="sekolah">
    <thead>
        <tr>
            <td>Id Sekolah</td>
            <td>Nama Sekolah</td>
            <td>Nilai Akreditasi</td>
            <td>Jumlah Guru</td>
            <td>Data Siswa</td>
            <td>Action</td>
            <td></td>
        </tr>
    </thead>
   	<?php foreach ($smp as $key => $smp) {
	?>
    <tr>
        <td><?php echo $smp->id?></td>
        <td><?php echo $smp->nama?></td>
        <td><?php echo $smp->nilai_akreditasi?></td>
        <td><?php echo $smp->jumlah_guru?></td>
        <td><a class="" href="<?php echo site_url('Siswa/sekolah/'.$smp->id);?>">Siswa</a></td>
		<td><a class="btn btn-success glyphicon glyphicon-edit" href="<?php echo site_url('Sekolah/edit/'.$smp->id);?>"></a></td>
		<td><a class="btn btn-danger glyphicon glyphicon-trash" href="<?php echo site_url('Sekolah/hapus/'.$smp->id);?>"></a></td>

    </tr>
   	<?php } ?>

</table>
	</body>
</html>