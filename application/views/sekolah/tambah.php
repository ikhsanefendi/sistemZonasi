<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Add Room</title>
	</head>
	<script>
		
	</script>
	<body>
		<div class="col-lg-12">
		<h1>Form Tambah Ruangan</h1>
		<br></br>
		<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
		    <div class="form-group">
		        <label class="col-lg-2 control-label">ID</label>
		        <div class="col-lg-5">
		            <input type="text" name="nama" id="nama" class="form-control">
		        </div>
		    </div>
		    
		    <div class="form-group">
		        <div class="col-lg-5">
		            <input type="text" name="keterangan" id="keterangan" class="form-control">
		        </div>
		    </div>
  <div class="form-group">
		        <label class="col-lg-2 control-label">Alamat</label>
		        <div class="col-lg-5">
		            <input type="text" name="keterangan" id="keterangan" class="form-control">
		        </div>
		    </div>
		    <div class="form-group">
		        <label class="col-lg-2 control-label">Gambar Ruangan</label>
		        <div class="col-lg-5">
		            <input type="file" name="gambar" class="form-control">
		        </div>
		    </div>
  <div class="form-group">
		        <label class="col-lg-2 control-label">Nilai Akreditasi</label>
		        <div class="col-lg-5">
		            <input type="text" name="keterangan" id="keterangan" class="form-control">
		        </div>
		    </div>

      		  <button class="btn btn-primary" type="submit" ><i class="glyphicon glyphicon-hdd"></i> Simpan</button>
        	  <a href="" class="btn btn-default">Kembali</a>
<script src="<?php echo base_url() ?>assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
		 </div>
	</form>
	</body>
</html>