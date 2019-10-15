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
		<br></br>
		<div class="col-lg-12">
		<h1>Form Tambah Sekolah</h1>
		<br></br>
		<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

	        <input type="text" name="id" id="id" class="form-control" value="<?php echo $id_max['id_sekolah']+1;?>">
		    

		    <div class="form-group">
		        <label class="col-lg-2 control-label">Nama Sekolah</label>
		        <div class="col-lg-5">
		            <input type="text" name="nama" id="nama" class="form-control">
		        </div>
		    </div>
		   <!--  
		    <div class="form-group">
		        <label class="col-lg-2 control-label">Nama Sekolah</label>
		        <div class="col-lg-5">
		            <input type="text" name="keterangan" id="keterangan" class="form-control">
		        </div>
		    </div> -->
  			<div class="form-group">
		        <label class="col-lg-2 control-label">longitude</label>
		        <div class="col-lg-5">
		            <input type="text" name="long" id="long" class="form-control">
		        </div>
		    </div>
		    <div class="form-group">
		        <label class="col-lg-2 control-label">Latitude</label>
		       	<div class="col-lg-5">
		            <input type="text" name="la" id="la" class="form-control">
		        </div>
		    </div>
 			
 			<div class="form-group">
		        <label class="col-lg-2 control-label">Nilai Akreditasi</label>
		        <div class="col-lg-5">
		            <input type="number" name="akreditasi" id="akreditasi" class="form-control">
		        </div>
		    </div>
			
			<div class="form-group">
		        <label class="col-lg-2 control-label">Jumlah Guru</label>
		        <div class="col-lg-5">
		            <input type="number" name="n_guru" id="n_guru" class="form-control">
		        </div>
		    </div>
      		  <button class="btn btn-primary" type="submit" ><i class="glyphicon glyphicon-hdd"></i> Simpan</button>
        	  <a href="" class="btn btn-default">Kembali</a>
<script src="<?php echo base_url() ?>assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
		 </div>
	</form>
	</body>
</html>