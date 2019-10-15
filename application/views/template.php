<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Template</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">


	</head>
	<body>
		<div class="col-md-12">
   			<?php echo $_header;?>
        </div>
        <div class="col-md-3">
            <?php echo $_sidebar;?>
        </div>
        <div class="col-md-9">
            <?php echo $_content;?>
        </div>


            <div class="container"><div><?php echo $_footer?></div></div>
	</body>
</html>