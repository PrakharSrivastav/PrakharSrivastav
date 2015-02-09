<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
	<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php echo $title ?></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php $this->load->helper('url')
		?>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">

		<script src="<?php echo base_url(); ?>assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	</head>
	<body class="bg-colored">
		<!--[if lt IE 7]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser.<br />
		Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
		</p>
		<![endif]-->

		<div class="container">

			<nav class="row">
				<header class="col-lg-12">
					<ul class="home-menu pull-left">
						<li>
							<a href="<?php echo base_url(); ?>" class="links"><i class="fa fa-align-justify"></i></a>
						</li>
					</ul>
					<ul class="home-menu pull-right">
						<li>
							<a href="<?php echo base_url() . "developer/about"; ?>" class="links">About</a>
						</li>
						<li>
							<a href="<?php echo base_url()."developer/work"; ?>" class="links">Work</a>
						</li>
						<li>
							<a href="<?php echo base_url() . "developer/contact"; ?>" class="links">Contact</a>
						</li>
					</ul>
				</header>
			</nav>
