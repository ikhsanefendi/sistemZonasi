<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		  <script src="<?php echo base_url('assets/jquery.min.js') ?>"></script>

	  	  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/plugins/datatables/dataTables.min.css" /> 
          <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
          <script src="<?php echo base_url()?>assets/js/plugins/datatables/dataTables.min.js"></script>
   		 
    </head>

    <script type="text/javascript">
    	$(document).ready(function() {
    	$('#sma').DataTable();
		} );
	</script>
	<body>
	<br></br>
	<h1 class="text-center">Data Sekolah SMA</h1>

	<table class="table table-striped" id="sma">
    <thead>
        <tr>
            <td>Id Sekolah</td>
            <td>Nama Sekolah</td>
            <td>Alamat Sekolah</td>
            <td>Gambar Sekolah</td>
            <td>Action</td>
        </tr>
    </thead>
   	<?php foreach ($sma as $key => $sma) {
	?>
    <tr>
        <td><?php echo $sma->id?></td>
        <td><?php echo $sma->nama?></td>
        <td><?php echo $sma->alamat?></td>
        <td><?php echo $sma->gambar?></td>
        <td><a href="<?php echo site_url('Dashboard/edit/'.$sma->id)?>" class="btn btn-success glyphicon glyphicon-edit"></a></td>


    </tr>
   	<?php } ?>
</table>
	</body>
</html>