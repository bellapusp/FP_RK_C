<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Edit Account - LETTREQUEST</title>

		<!--google fonts-->
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
		
		<!--css-->
		<style type="text/css">
		/*GENERAL ELEMENTS*/
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
		input[type=text], textarea, input[type=date] {
		    width: 100%;
		    padding: 12px 20px;
		    margin: 8px 0;
		    display: inline-block;
		    border: 1px solid #ccc;
		    border-radius: 4px;
		    box-sizing: border-box;
		    font-family: Raleway;
		    resize: none;
		}
		form {
			box-shadow: 8px 10px 16px 0 rgba(0,0,0,0.2);
			width: 50%;
			margin: 0 auto;
			padding: 50px 0;
			background-color: white;
		}

		/*ID*/
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

		/*CLASS*/
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
			padding: 20px 0;
			margin: 0;
			/*border: 1px solid black;*/
		}

		/*section*/
		.title p {
			margin: 0;
			padding: 0;
		}
		.content {
			width: 100%;

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
					<div><a href="<?php echo base_url('index.php/home/welcome/'.'5114100000');?>">LETTREQUEST</a></div>
					<div>
						<img src="http://localhost:64700/RK/img/logo.png" alt="lettrequest" style="width:60px;height:60px;margin-top:2px;"> 
					</div>
				</div>
				<div class="desc">Letter Request Information System</div>
				<div class="navbar">
					<ul>
						<li><a href="<?php echo base_url('index.php/requestcontroller/showform/'.'5114100000'); ?>">Request Letter</a></li>
						<li><a href="<?php echo base_url('index.php/historycontroller/showhistory/'.'5114100000'); ?>">History</a></li>
						<li><a href="<?php echo base_url('index.php/profilecontroller/showprofile/'.'5114100000'); ?>">Profile</a></li>
						<li><a href="<?php echo base_url('index.php/home/logout/') ?>">Logout</a></li>
					</ul>
				</div>
			</div>
			<div id="section">
				<div class="title">
					<p>EDIT ACCOUNT</p>
				</div class="content">
					<form action="<?php echo base_url('index.php/profilecontroller/set_edit'); ?>" method="post"> 
						<table>
							<?php
								foreach ($edit->result() as $row)
								{
							?>
							<tr>
								<td>Name:</td>
								<td>
									<input type="text" name="Name" value="<?php echo $row->StudentName ?>" disabled> 
									<input type="hidden" name="Name" value="<?php echo $row->StudentName ?>">
								</td>
								
							</tr>
							<tr>
								<td>ID:</td>
								<td><input type="text" name="ID" value="<?php echo $row->StudentID ?>" disabled> </td>
								<input type="hidden" name="ID" value="<?php echo $row->StudentID ?>" > 
							</tr>
							<tr>
								<td>Address: </td>
								<td>
								<?php echo '<textarea name="Address" rows="4" cols="40">', $row->StudentAddress,'</textarea>'; ?>
								</td>
							</tr>
							<tr>
								<td>Birthday:</td>
							
								<td><input type="date" name="Birthday" value="<?php echo $row->Birthday ?>" disabled> </td>
								<input type="hidden" name="Birthday" value="<?php echo $row->Birthday ?>"> 
							</tr>
							<tr>
								<td>Parent Name:</td>
								<td><input type="text" name="ParentName" value="<?php echo $row->ParentName ?>"> </td>
							</tr>
							<tr>
								<td>Parent Address:</td>
								<td>
									<textarea name="ParentAddress" rows="4" cols="40"><?php echo $row->ParentAddress ?> </textarea>
								</td>
							</tr>
							<tr>
								<td>Parent Job:</td>
								<td><input type="text" name="ParentJob" value="<?php echo $row->ParentJob ?>"> </td>
							</tr>
							<tr>
								<td>Email:</td>
								<td><input type="text" name="Email" value="<?php echo $row->Email ?>"> </td>
							</tr>
							<tr>
								<td>Phone Number:</td>
								<td><input type="text" name="PhoneNumber" value="<?php echo $row->PhoneNumber ?>"> </td>
							</tr>
							<tr>
								
								<td><input type="hidden" name="Password" value="<?php echo $row->Password ?>" > </td>
							</tr>
							<tr>
							<tr>
								<td colspan="2">
									<button type="submit" class="button green">Save changes</button>
									<button class="button red confirm"><a href="<?php echo base_url('index.php/profilecontroller/showprofile/'. $row->StudentID); ?>" onclick="return confirm('Are you sure to discard changes?')"> Cancel </a></button></a>
								</td>
							</tr>
							<?php 
								}
							?>
						</table>
					</form>
				</div>
			</div>
			<div id="footer">
				5114100007 | 5114100138 | 5114100702<br>
				&copy; LETTREQUEST - RK C 2017
			</div>
		</div>

	</body>
</html>