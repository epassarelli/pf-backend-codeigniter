<!DOCTYPE html>
<html lang="es">

<head>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="WebPass" />
    <meta name="description" content="<?php //echo $description?>">
	<meta name="keywords" content="<?php //echo $keywords?>">	
	
    <!-- Stylesheets
    ============================================= -->


	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="<?php echo base_url()?>assets/css/estilos.css">
	start:web fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,500italic,400italic,700,700italic%7CRoboto+Condensed:400,700%7CRoboto+Slab' rel='stylesheet' type='text/css'>



    <!-- end:web fonts -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap-social.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
		body {
		  padding-top: 50px;
		  padding-bottom: 0px;
		}
		
		#page-footer{
			background: #000;
			bottom: 0px;
			margin: 20px 0 0 0;
			padding: 20px;
			color: #fff;
		}  

		#page-footer a{
			color: red;
		} 

		#page-footer a:hover{
			color: white;
		} 
		/* Media */

		.media{
		    margin: 0;
		    padding: 10px 0;
		    border-top: 1px dashed #ccc;
		}

		.media img{
		    width: 64px;
		    height: 64px;
		    padding: 3px;
		    border: 1px solid #ccc;
		}

		.ad-responsive{
			margin: 10px 0;
		}


	</style>


    <link href="<?php echo base_url()?>assets/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />

    <!-- Document Title
    ============================================= -->
    <title><?php echo $title; ?></title>

	
</head>

<body>

	<!-- NAV
	============================================= -->
    <?php $this->load->view("nav_h_view"); ?>
	
	<!-- Header
	============================================= -->


	<!-- Site Content
	============================================= -->
	<div class="container">
	
		<?php $this->load->view($view);	?>

	</div>

	
	<!-- Footer
	============================================= -->
	<?php $this->load->view("footer_view"); ?>	

    <!-- External JavaScripts
    ============================================= -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>	
	<!-- Latest compiled and minified JavaScript -->
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  
	<script src="<?php echo base_url();?>assets/js/scripts.js"></script>

</body>

</html>

	