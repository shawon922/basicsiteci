<?php echo doctype('html5');?><!--<!DOCTYPE html>-->
<html lang="en">
	<head>

		<meta name="viewport" content="width=device-width, initial-scal=1.0" />

		<title><?php echo $title; ?> Page</title>

		
		
		<!--Bootstrap CSS-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>styles/bootstrap/css/bootstrap.min.css" />

		<!--Bootstrap theme-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>styles/bootstrap/css/bootstrap-theme.min.css" />

		<!-- Jquery UI CSS -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>styles/css/jquery-ui-1.10.4.min.css" />

		<!-- Font Awesome CSS -->
		<link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>styles/font-awesome/css/font-awesome.min.css" />

		<!-- Jquery JS -->
		<script type="text/javascript" src="<?php echo base_url(); ?>styles//js/jquery-1.9.1.min.js"></script>

		<!-- Jquery UI JS -->
		<script type="text/javascript" src="<?php echo base_url(); ?>styles//js/jquery-ui-1.10.4.min.js"></script>

		<!--Bootstrap js-->
		<script type="text/javascript" src="<?php echo base_url(); ?>styles/bootstrap/js/bootstrap.min.js"></script>
		
		<!--Custom CSS-->
		<link rel="stylesheet" href="<?php echo base_url(); ?>styles/css/style.css" type="text/css" />

		<!--Responsive CSS-->
		<link rel="stylesheet" href="<?php echo base_url(); ?>styles/css/responsive.css" type="text/css" />

		

		<!-- Select Nav JS -->
		<script type="text/javascript" src="<?php echo base_url(); ?>styles//js/selectnav.min.js"></script>

		<!-- Ready JS for responsive-->
		<script type="text/javascript" src="<?php echo base_url(); ?>styles//js/ready.min.js"></script>


		<script>
			domready(function(){
				selectnav('nav', {
					label: '--- Navigation --- '
				});
				prettyPrint()
			})
		</script>

		<style type="text/css">
		
		</style>
	</head>
	
	<body>
		<div class="fix cont">
			<div class="fix header_nav">
				<ul id="">
					<li><a href="#">PRIVACY</a></li>
					<li><a href="#">CONTACT</a></li>
					<li><a href="#">FAQ</a></li>
					<li><a href="#">ABOUT US</a></li>
					<li><a href="#">NEWSLETTER</a></li>
					<li><a href="#">HOME</a></li>
				</ul>
			</div>
		</div>
		<div class="fix container">
			<div class="fix header">
				<!--<div class="fix floatleft logo">
					<img src="images/logo.png" alt="logo" title="logo" />
				</div>-->
				
				<div class="floatright header_text">
					<p>Resistor is electrical or electronic components which resist the flow of current across the resistor device. The resistance to current flow results in a voltage drop across the resistor device. Resistors are used extensively throughout electrical and electronic circuits.</p>
				</div>
				
			</div>
			<div class="line"></div>