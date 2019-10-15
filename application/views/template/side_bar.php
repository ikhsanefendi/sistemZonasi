<!DOCTYPE html>
<html> <!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Dashboard - LanderApp</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

  <!-- Open Sans font from Google CDN -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&amp;subset=latin" rel="stylesheet" type="text/css">

  <!-- LanderApp's stylesheets -->
  <link href="<?php echo base_url();?>assets/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets/stylesheets/landerapp.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets/stylesheets/widgets.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets/stylesheets/rtl.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets/stylesheets/themes.min.css" rel="stylesheet" type="text/css">

</head>
<body>
  <div id="main-menu" role="navigation">
      <ul class="navigation">
          <li>
            <a href="<?php echo site_url('Dashboard');?>"><i class="menu-icon fa fa-dashboard"></i><span class="mm-text">Dashboard</span></a>
          </li>
          <li>
            <a href="<?php echo site_url('Sekolah');?>"><i class="menu-icon fa fa-dashboard"></i><span class="mm-text">Sekolah</span></a>
          </li>
          <li>
            <a href="<?php echo site_url('Siswa');?>"><i class="menu-icon fa fa-dashboard"></i><span class="mm-text">Siswa</span></a>
          </li>
        
          <li>
            <a href="<?php echo site_url('Kriteria');?>"><i class="menu-icon fa fa-tasks"></i><span class="mm-text">Kriteria</span></a>
          </li>
          <li>
            <a href="<?php echo site_url('Analisa');?>"><i class="menu-icon fa fa-flask"></i><span class="mm-text">Analisa</span></a>
          </li>  
      </ul>      
    </div>

  <div id="main-menu-bg">
     
  </div>


<!-- Get jQuery from Google CDN -->
<!--[if !IE]> -->
  <script type="text/javascript"> window.jQuery || document.write('<script src="<?php echo base_url();?>assets/javascripts/jquery.min.js">'+"<"+"/script>"); </script>

<script src="<?php echo base_url();?>assets/javascripts/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/javascripts/landerapp.min.js"></script>

<script type="text/javascript">
  init.push(function () {
    // Javascript code here
  })
  window.LanderApp.start(init);
</script>

</body>
</html>