<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Letter Request Information System - LETTREQUEST</title>

		<!--google fonts-->
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
		
		<!--css-->
		<style type="text/css">
		/*general element*/
		body {
				font-family:"Century Gothic";
				padding: 0;
				margin: 0;
				width: 100%;
				font-family: Raleway;
		}
		li a {
			text-decoration: none;
		}
		table {
			border-collapse: collapse;
			margin: 0 auto;
			text-align: left;
		}
		table th, table td {
			padding: 10px;
			font-weight: normal;
		}

		/*id*/
		#container {
			width: 100%;
		}
		#header {
			/*border: 3px solid green;*/
			position: fixed;
			top: 0;
			background-color: #2A4C5E;
			min-height: 100px;
			width: 100%;
			color: #b3b3b3;
		}
		#section, #footer {
			text-align: center;
			background-color: #f7f7f7;
			/*border: 1px solid black;*/
		}
		#section {
			min-height: 700px;
			margin-top: 100px;
			padding-bottom: 30px;
			width: 100%;
		}
		#footer {
			padding: 20px;
			background-color: #2A4C5E;
			color: #b3b3b3;
		}

		/*class*/
		.logo div {
			display: inline-block;
		}
		.logo {
			/*border: 1px solid yellow;*/
			font-family: Poiret One;
			font-size: 50px;
			font-weight: normal;
			width: 61%;
			min-height: 70px;
			float: left;
			padding-left: 15px;
		}
		.logo a:link, .logo a:hover, .logo a:visited, .logo a:active {
			color: #f7f7f7;
			text-decoration: none;
		}
		.desc {
			/*border: 1px solid yellow;*/
			width: 61%;
			min-height: 30px;
			float: left;
			line-height: 1.8;
			padding-left: 15px;
			letter-spacing: 2px;
			word-spacing: 2px;
		}
		.navbar {
			margin-left: 61%;
			width: 39%;
			margin-right: 0;
			margin-top: 0;
			margin-bottom: 0;
			text-align: center;
			height: 100px;
			/*border: 1px solid yellow;*/
			display: table-cell;
    		vertical-align: middle;
		}
		.navbar ul {
			/*border: 3px solid red;*/
			list-style-type: none;
			margin: 0;
			padding: 0;
			display: inline-block;

		}
		.navbar li {
			/*border: 1px solid yellow;*/
			padding: 20px 30px;
			float: left;
			max-width: 200px;
		}
		.navbar li a:link, .navbar li a:visited {
			text-decoration: none;
			color: #b3b3b3;
			transition: color 0.25s;
		}
		.navbar li a:hover {
			text-decoration: none;
			color: #f7f7f7;
		}
		.title {
			font-family: Poiret One;
			font-size: 72px;
			color: #2a4c5e;
			padding-top: 5px;
		}
		.content {
			width: 100%;
			padding-bottom: 10px;
		}
		.column {
			display: inline-block;
			width: 30%;
			text-align: center;
		}
		.caption {
			font-family: Poiret One;
			font-size: 30px;
			color: #365e73;
		}
		.text {
			width: 200px;
			margin: auto;
			font-size: 16px;
		}
		</style>
	</head>

	<body>
		<div id="container">
			<div id="header">
				<div class="logo">
					<div><a href="<?php echo base_url('index.php/home/welcome/');?>">LETTREQUEST</a></div>
					<div>
						<img src="http://localhost/Lettrequest/img/logo.png" alt="lettrequest" style="width:60px;height:60px;margin-top:2px;"> 
					</div>
				</div>
				<div class="desc">Letter Request Information System</div>
				<div class="navbar">
					<ul>
						<li><a href="<?php echo base_url('index.php/requestcontroller/showform/'); ?>">Request Letter</a></li>
						<li><a href="<?php echo base_url('index.php/historycontroller/showhistory/'); ?>">History</a></li>
						<li><a href="<?php echo base_url('index.php/profilecontroller/showprofile/'); ?>">Profile</a></li>
						<li><a href="<?php echo base_url('index.php/home/logout/') ?>">Logout</a></li>
					</ul>
				</div>
			</div>
			<div id="section">
				<div class="title">
					<p>LETTER REQUEST PROCESS</p>
				</div>
				<div class="content">
					<div class="column">
						<p class="caption"> STEP 1</p>
						<img src="http://localhost/Lettrequest/img/fill.png" alt="step 1" style="width:200px;height:200px;">
						<br>
						<br>
						<p class="text">Fill and submit the letter request form</p>
					</div>
					<div class="column">
						<p class="caption"> STEP 2</p>
						<img src="http://localhost/Lettrequest/img/wait.png" alt="step 2" style="width:200px;height:200px;">
						<br>
						<br>
						<p class="text">Wait until the status become ACCEPTED</p>
					</div>
					<div class="column">
						<p class="caption"> STEP 3</p>
						<img src="http://localhost/Lettrequest/img/printed.png" alt="step 3" style="width:200px;height:200px;">
						<br>
						<br>
						<p class="text">Take the printed version of your letter in the staff office</p>
					</div>
				</div>
			</div>
			<div id="footer">
				5114100007 | 5114100138 | 5114100702<br>
				&copy; LETTREQUEST - RKC 2017
			</div>
		</div>

	</body>
</html>