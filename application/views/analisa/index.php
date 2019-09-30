<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<script src="<?php echo base_url('assets/jquery.min.js') ?>"></script>
		
		<script>
			function analisa(str) {
				  if (str=="") {
				  	//loadData();
				  	return false;
				  }
				  if (window.XMLHttpRequest) {
				    // code for IE7+, Firefox, Chrome, Opera, Safari
				    xmlhttp=new XMLHttpRequest();
				  } else { // code for IE6, IE5
				    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				  }
				  xmlhttp.onreadystatechange=function() {
				    if (this.readyState==4 && this.status==200) {
				      document.getElementById("txtHint").innerHTML=this.responseText;
				    }
				  }
				  xmlhttp.open("GET","<?php echo site_url('Analisa/clustering');?>?status="+str,true);
				  xmlhttp.send();
				}
		</script>
	</head>
	<body>
	<h1 class="text-left">Analisa Sekolah Terdekat</h1>
		<div class="col-md-12">
			<form action="" class="form-horizontal">
				<div class="form-group">
					<a href="<?php echo site_url('')?>" class="btn btn-primary">analisa</a>
	                <div class="col-lg-2">
		       	  		<label class="col-lg-12 control-label">Pilih Sekolah</label>
	                </div>
	                <div class="col-lg-4">

	                        <select name="sma" id="sma" class="form-control" onchange="analisa(this.value)">
	                      		<?php foreach ($sma as $key) {?>
	                            	<option value="<?php echo $key->id?>"><?php echo $key->nama?></option>
	                            <?php } ?>
	                        </select>
	                </div>
	           </div>
			</form>		
		</div>
		<div id="txtHint" name="txtHint">
	</body>
</html>