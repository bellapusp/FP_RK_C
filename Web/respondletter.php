<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Admin - LETTREQUEST</title>

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
		table th {
			text-align: center;
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
			/*border: 3px solid orange;*/
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
		/*header*/
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
			/*border: 1px solid green;*/
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
			width: 25%;
			margin-right: 0;
			margin-top: 0;
			margin-bottom: 0;
			text-align: right;
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
			float: right;
		}
		.navbar li {
			/*border: 1px solid yellow;*/
			padding: 20px 30px;
			float: right;
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

		/*section*/
		.title {
			font-family: Poiret One;
			font-size: 72px;
			color: #2a4c5e;
			padding: 20px 0;
			margin: 0;
			/*border: 1px solid black;*/
		}
		.title p {
			margin: 0;
			padding: 0;
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

		/*table*/
		.fancy tr:nth-child(even) {
			background-color: white;
			transition: background-color 0.25s;
		}
		.fancy tr:nth-child(odd) {
			background-color: #e6e8ed;
			transition: background-color 0.25s;
		}
		.hov tr:hover {
			background-color: #a1b3bd;
		}
		.fancy th {
			background-color: #365e73;
			height: 40px;
			color: white;
		}
		.fancy, .fancy th, .fancy td {
			border-bottom: 1px solid lightgray;
		}
		.fancy {
			width: 50%;
		}


		/*button*/
		.button {
			background-color: #b3b3b3;
			cursor: pointer;
			border-radius: 5px;
		    text-decoration: none;
		    font-family: Raleway;
		    font-size: 14px;
		    margin: 0;
		    border: none;
		}
		.button a {
			text-decoration: none;
			color: #f7f7f7;
			margin: 0;
			padding: 16px 32px;
			border: none;
			border-radius: 5px;
			text-align: center;
		}
		.green {
			padding: 16px 32px;
			background-color: #58aa5b;
			color: #f7f7f7;
		}
		.red {
			background-color: #f44336;
			color: #f7f7f7;
		}
		.normal {
			padding: 16px 32px;
		}
		.confirm {
			padding: 16px 0;
		}
		.red:hover, .green:hover, .button a:hover {
			background-color: #eee;
			color: #6d6d6d;
			font-weight: bold;
		    transition-duration: 0.25s;
		}
		</style>
	</head>

	<body>
		<div id="container">
			<div id="header">
				<div class="logo">
					<div><a href="<?php echo base_url('index.php/home/welcome/');?>">LETTREQUEST</a></div>
					<div>
						<img src="http://localhost:64700/RK/img/logo.png" alt="lettrequest" style="width:60px;height:60px;margin-top:2px;"> 
					</div>
				</div>
				<div class="desc">Letter Request Information System</div>
				<div class="navbar">
					<ul>
						<li><a href="<?php echo base_url('index.php/home/logout/') ?>">Logout</a></li>
					</ul>
					</ul>
				</div>
			</div>
			<div id="section">
				<div class="title">
					<p>LETTER REQUEST LIST</p>
				</div>
					<table class="hov fancy" style="width:95%;">
						<!-- header row (shows attributes) -->
						<tr>
							<th>Letter Number</th>
						    <th>Date</th>
						    <th>Subject</th>
						    <th>Content</th>
						    <th>Status</th>
						    <th>Student ID</th>
						    <th>Actions</th>
						</tr>
						<!-- data rows (show records) -->
						<?php
							foreach ($letter as $row) 
							{
						?>
								<tr>
								    <td><?php echo $row->LetterNumber; ?>/IT2.5.I.1/LR/2016</td>
								    <td><?php echo $row->Date; ?></td>
								    <td><?php echo $row->Subject; ?></td>
								    <td><?php echo $row->Content; ?></td>
								    <td><?php echo $row->Status; ?></td>
								    <td><?php echo $row->StudentID; ?></td>
								    <?php
								    if($row->Status == 'Waiting')
								    {
								    ?>
								    	<td><a href="<?php echo base_url('index.php/statuscontroller/accept')."/".$row->LetterNumber; ?>"><button class="button green">Accept</button></a></td>
								    <?php
									}
									else
									{
									?>
										<td><button class="button normal" disabled><img src="<?php echo base_url('img/check.png'); ?>" alt="ACCEPTED" style="width:15px;height:10px;"></button></td>
									<?php
									}
								    ?>
								</tr>
						<?php
							}
						?>
					</table>
			</div>
			<div id="footer">
				5114100007 | 5114100138 | 5114100702<br>
				&copy; LETTREQUEST - RK C 2017
			</div>
		</div>

	</body>
</html>