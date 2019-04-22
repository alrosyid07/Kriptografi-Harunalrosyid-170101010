<?php
error_reporting(0);
$menu = $_GET[m];
include"lib.php"; 
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
		<script type="text/javascript">
			function getkey(e)
			{
			if (window.event)
			   return window.event.keyCode;
			else if (e)
			   return e.which;
			else
			   return null;
			}
			function goodchars(e, goods, field)
			{
			var key, keychar;
			key = getkey(e);
			if (key == null) return true;
			 
			keychar = String.fromCharCode(key);
			keychar = keychar.toLowerCase();
			goods = goods.toLowerCase();
			 
			// check goodkeys
			if (goods.indexOf(keychar) != -1)
			    return true;
			// control keys
			if ( key==null || key==0 || key==8 || key==9 || key==27 )
			   return true;
			    
			if (key == 13) {
			    var i;
			    for (i = 0; i < field.form.elements.length; i++)
			        if (field == field.form.elements[i])
			            break;
			    i = (i + 1) % field.form.elements.length;
			    field.form.elements[i].focus();
			    return false;
			    };
			// else return false
			return false;
			}
		</script>
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
						<a href="index.php" class="navbar-brand">Kriptografi ROT3</a>
					</div>
					<div class="navbar-collapse collapse navbar-right">
						<ul class="nav navbar-nav">
							<li ><a href='?m=rot3'>Enkripsi</a></li>
							<li ><a href='?m=d_rot3'>Dekripsi</a></li>
							<li ><a href="?m=tentang">About</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--END HEADER-->
