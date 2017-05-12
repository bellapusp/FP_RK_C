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
		body {
			padding: 0;
			margin: 0;
			width: 100%;
			font-family: Raleway;
			background: linear-gradient(rgba(42, 76, 94, 0.5), rgba(42, 76, 94, 0.5)), url("img/bg.jpg") no-repeat center center fixed;
  			background-size: cover;	
		}

		#container {
			width: 100%;
			text-align: center;
		}

		#section {
			padding-bottom: 30px;
			width: 100%;
			margin: 0;
			padding: 0;
		}
		.content {
			margin: 0;
			padding: 91px 0;
		}

		/*form*/
		input, textarea, select {
		    width: 100%;
		    padding: 12px 10px;
		    margin: 8px 0;
		    display: inline-block;
		    border: 1px solid #ccc;
		    border-radius: 4px;
		    box-sizing: border-box;
		    font-family: Raleway;
		    resize: none;
		}
		.login {
			max-width: 30%;
			margin: 0 auto;
			padding: 20px 10px;
			background-color: #f7f7f7;
			border-radius: 5px;
			border: none;
			box-shadow: 15px 15px 30px #2a4c5e;
		}

		/*inside form tag*/
		/*logo*/
		.logo div {
			margin: 0;
			padding: 0;
		}
		.logo {
			font-family: Poiret One;
			font-size: 60px;
			font-weight: bold;
		}
		.logo a:link, .logo a:hover, .logo a:visited, .logo a:active {
			color: #2a4c5e;
			text-decoration: none;
		}
		.desc {
			color: #b3b3b3;
		}
		/*login form*/
		.login table {
			min-width: 75%;
			margin: 0 auto;
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
		.blue {
			padding: 16px 32px;
			background-color: #2a4c5e;
			color: #f7f7f7;
		}
		.blue:hover {
			background-color: #eee;
			color: #6d6d6d;
			font-weight: bold;
		    transition-duration: 0.25s;
		}

		#footer {
			padding: 20px;
			background:linear-gradient(rgba(42, 76, 94, 0.9), rgba(42, 76, 94, 0.9));
			color: #b3b3b3;
			/*border: 5px solid red;*/
			bottom: 0;
			margin: 0;
		}
		</style>
	</head>

	<body>
		<div id="container">
			<div id="section">
				<div class="content">
					<form class="login" action="<?php echo base_url('index.php/home/login/'); ?>" method="post">
						<div id="header">
							<div class="logo">
								<div>
									<img src="http://localhost/Lettrequest/img/logo.png" alt="lettrequest" style="width:80px;height:80px;margin-top:2px;"> 
								</div>
								<div><a href="http://localhost/Lettrequest">LETTREQUEST</a></div>
							</div>
							<div class="desc">Letter Request Information System</div>
						</div>
						<table>
							<tr>
								<td>
									<input type="text" name="username" placeholder="Your ID">
								</td>
							</tr>
							<tr>
								<td>
									<input type="password" name="password" placeholder="Password">
								</td>
							</tr>
							<tr>
								<td>
									<button type="submit" class="button blue">Log in</button>
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