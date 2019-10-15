<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Halaman Kriteria</title>

		<!-- Bootstrap CSS -->
	      <script src="<?php echo base_url('assets/jquery.min.js') ?>"></script>
		  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/plugins/datatables/dataTables.min.css" /> 
          <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
          <script src="<?php echo base_url()?>assets/js/plugins/datatables/dataTables.min.js"></script>
          
   		 
    </head>

    <script type="text/javascript">
    	$(document).ready(function() {
    	$('#kriteria').DataTable();
		} );
	</script>
	</head>
	<body>
	<br></br>
  <h1 class="text-center">Data Kriteria</h1>

	<a href="<?php echo site_url('Kriteria/tambah')?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah Kriteria</a>
	<br></br>

	<table class="table table-striped" id="kriteria">
    <thead>
        <tr>
            <td>no</td>
            <td>Nama Kriteria</td>
            <td>Nilai Kriteria</td>
            <td>Action</td>
        </tr>
    </thead>
   	<?php $no=0; foreach ($kriteria as $key) { $no++;
	?>
    <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $key->nama?></td>
        <td><?php echo $key->nilai?></td>
        <td><a href="<?php echo site_url('Kriteria/edit/'.$key->id)?>" class="btn btn-success glyphicon glyphicon-edit"></a>
        <a href="<?php echo site_url('Kriteria/delete/'.$key->id)?>" class="btn btn-danger glyphicon glyphicon-trash"></a></td>

    </tr>
   	<?php } ?>

</table>
	</body>
</html>