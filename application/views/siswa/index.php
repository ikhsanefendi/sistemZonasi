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
    	$('#siswa').DataTable();
		} );
	</script>


	</head>
	<body>
  <br></br>
	<h1 class="text-center">Data Siswa</h1>

	<a href="<?php echo site_url('Siswa/tambah')?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah Siswa</a>
	<!-- <a href="<?php echo site_url('Siswa/import')?>" class="btn btn-primary"><i class="glyphicon glyphicon-book"></i> Import Siswa</a> -->
	
	<br></br>

	<table class="table table-striped" id="siswa">
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
        <td><?php $data=$this->db->select('nama')->where('id',$siswa->nama_sekolah)->get('tb_smp')->row();
              echo $data->nama;?></td>
        <td><?php echo $siswa->jumlah_un?></td>
        <td><?php echo $siswa->jumlah_nilai_sekolah?></td>
        <td><a href="<?php echo site_url('Siswa/edit/'.$siswa->id)?>" class="btn btn-success glyphicon glyphicon-edit"></a>
        	<a href="<?php echo site_url('Siswa/delete/'.$siswa->id)?>" class="btn btn-danger glyphicon glyphicon-trash"></a></td>

    </tr>
   	<?php } ?>

</table>
	</body>
</html>