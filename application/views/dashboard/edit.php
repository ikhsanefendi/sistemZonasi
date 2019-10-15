<br></br>
<br></br>
<legend><?php echo $title;?></legend>
<?php echo validation_errors();?>
<?php echo $message;?>

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
  
    <input type="hidden" name="id" class="form-control" value="<?php echo $sekolah['id'];?>">
    <div class="form-group">
        <label class="col-lg-2 control-label">Nama Sekolah</label>
        <div class="col-lg-5">
            <input type="text" name="nama" class="form-control" value="<?php echo $sekolah['nama'];?>">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Alamar</label>
        <div class="col-lg-5">
            <input type="alamat" name="akreditasi" class="form-control" value="<?php echo $sekolah['alamat'];?>">
        </div>
    </div>
   <!--  <div class="form-group">
        <label class="col-lg-2 control-label">Jumlah Guru</label>
        <div class="col-lg-5">
            <input type="number" name="guru" id="guru" class="form-control" value="<?php echo $sekolah['jumlah_guru'];?>">
        </div>
    </div> -->
  
    
    <div class="form-group well col-lg-7">
        <button class="btn btn-primary"><i class="glyphicon glyphicon-hdd"></i> Update</button>
        <a href="<?php echo site_url('sekolah');?>" class="btn btn-default">Kembali</a>
    </div>
</form>