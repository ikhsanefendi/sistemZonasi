<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Template</title>

		<!-- Bootstrap CSS -->
			<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
            
            <script src="<?php echo base_url('assets/js/jquery-1.8.3.min.js');?>"></script>
            <script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
           
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<?php echo $_header;?>
        
            
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <?php echo $_sidebar;?>
                    </div>
                
                    <div class="col-md-9">
                        <?php echo $_content;?>
                    </div>

                </div>

            </div>

            <div class="container"><div><?php echo $_footer?></div></div>

        <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
	</body>
</html>