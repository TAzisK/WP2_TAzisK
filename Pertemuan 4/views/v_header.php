<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Web Prog II | Merancang template sederhana dengan codeigniter</title>	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/stylebuku.css">
</head>
<body>
	<div id="wrapper">
		<header>
			<hgroup>
				<h1>RentalBuku.Net</h1>
				<h3>Membuat template sederhana codeigniter</h3>
			</hgroup>
			<nav>
				<ul>
					<li><a href="<?php echo base_url().'index.php/web' ?>">Home</a></li>
					<li><a href="<?php echo base_url().'index.php/web/about' ?>">About</a></li>
					<li><a href="<?php echo base_url().'index.php/web/register' ?>">Register</a></li>
					<li><a href="<?php echo base_url().'index.php/web/login' ?>">Login</a></li>
				</ul>
			</nav>
			<div class="clear"></div>
		</header>