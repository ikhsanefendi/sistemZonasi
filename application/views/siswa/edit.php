<br></br>
<br></br>
<legend><?php echo $title;?></legend>
<?php echo validation_errors();?>
<?php echo $message;?>

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
  
    <input type="hidden" name="id" class="form-control" value="<?php echo $siswa['id'];?>">
    <div class="form-group">
        <label class="col-lg-2 control-label">Nama Siswa</label>
        <div class="col-lg-5">
            <input type="text" name="nama" class="form-control" value="<?php echo $siswa['nama_siswa'];?>">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Nilai Ujian Nasional</label>
        <div class="col-lg-5">
            <input type="number" name="n_un" class="form-control" value="<?php echo $siswa['jumlah_un'];?>">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Nilai Ujian Sekolah</label>
        <div class="col-lg-5">
            <input type="number" name="n_ns" id="n_ns" class="form-control" value="<?php echo $siswa['jumlah_nilai_sekolah'];?>">
        </div>
    </div>

    <input type="text" name="sekolah" id="sekolah" class="form-control" value="<?php echo $siswa['nama_sekolah'];?>">
  
    
    <div class="form-group well col-lg-7">
        <button class="btn btn-primary"><i class="glyphicon glyphicon-hdd"></i> Update</button>
        <a href="<?php echo site_url('sekolah');?>" class="btn btn-default">Kembali</a>
    </div>
</form>