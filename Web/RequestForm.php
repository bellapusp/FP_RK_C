<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Request Letter - LETTREQUEST</title>

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
		input[type=text], select, input[type=date], textarea {
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
					<p>LETTER REQUEST FORM</p>
				</div>
				<div class="content">
					<form action="<?php echo base_url('index.php/requestcontroller/sendletter'); ?>" method="post">
						<table>
							<tr>
								<td>Request Date: </td>
								<td><input type="date" name="Date" max="2100-12-31" min="1900-01-01"> </td>
							</tr>
							<tr>
								<td>Subject: </td>
								<td>
									<select name="Subject" placeholder="Choose subject...">
										<option></option>
										<option value="Thesis">Thesis Data Request Letter</option>
										<option value="Software">Software Making Letter</option>
										<option value="Graduation">Graduation Letter</option>
										<option value="Parent Salary">Parent Salary Letter</option>
										<option value="BPJS">BPJS Letter</option>
										<option value="Scholarship">Not Receiving Scholarship Letter</option>
										<option value="Job Recommendation">Job Recommendation Letter</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Content: </td>
								<td>
									<textarea name="Content" rows="10" cols="30"></textarea>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									
									<button type="submit" class="button green">Submit</button>
									<button type="reset" class="button red confirm"><a href="<?php echo base_url('index.php/home/welcome'); ?>" onclick="return confirm('Are you sure to discard changes?')">Cancel</a></button>
								</td>
							</tr>
						</table>
					</form>
				</div>
			</div>
			<div id="footer">
				5114100007 | 5114100138 | 5114100702<br>
				&copy; LETTREQUEST - RKC 2017
			</div>
		</div>

	</body>
</html>