<?php
error_reporting(0);
$menu = $_GET[m];
include"aes256.php"; 
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>KRIPTOGRAFI</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
	    <link rel="stylesheet" href="style.css">
	    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway:800" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
	</head>

	<body>

		<!--BEGIN HEADER-->
		<div class="container-fluid bg-header">
			<div class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
			              	<span class="icon-bar"></span>
			              	<span class="icon-bar"></span>
			              	<span class="icon-bar"></span>
						</button>
						<a href="index.php" class="navbar-brand">Kriptografi Algoritma AES 256</a>
					</div>
					<div class="navbar-collapse collapse navbar-right">
						<ul class="nav navbar-nav">
							<li ><a href='?m=enkripsi'>Enkripsi</a></li>
							<li ><a href='?m=dekripsi'>Dekripsi</a></li>
							<li ><a href="?m=tentang">About</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--END HEADER-->
