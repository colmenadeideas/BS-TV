<!DOCTYPE html>
<html lang="es">
<head>	
	<meta charset="<?php echo DB_ENCODE; ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Besign Colmena de ideas - besign.com.ve">
    <link rel="shortcut icon" href="<?php echo IMG; ?>favico.png">
    
    <title><?php echo $this->title; ?></title>
	
	<link href="<?php echo CSS; ?>bootstrap.min.css" rel="stylesheet">
	<!--link href="<?php echo CSS; ?>font-awesome.min.css" rel="stylesheet"-->
	<link href="<?php echo CSS; ?>tecnovial.css" rel="stylesheet">
	
	<?php //echo GOOGLE_FONTS; ?>
	<?php //echo GOOGLE_ANALYTICS; ?>

    
    <script src="<?php echo JQUERY_LINK; ?>"></script>
    <script src="<?php echo JS; ?>assets/bootstrap.min.js"></script>
    <script src="<?php echo JS; ?>config.js"></script>
    <!--script data-main="<?php echo JS;?>main-site" src="<?php echo JS; ?>assets/require.js"></script-->
   
</head>
<body>
	<div class="container-fluid">
		
		<div class="head">
			<div class="container">
				<div class="col-lg-4 col-md-4"><img src="<?php echo IMG; ?>tecnovial-logotipo.png" class="img-responsive" /></div>
				<?php $this->render('search'); ?>
			</div>
		</div>