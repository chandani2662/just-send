<!DOCTYPE html>
<html>
<head>
	<title>send otp</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="show_code.css">


</head>
<body>
	<div class="container">
    	<div class="contant">
      		<div class="main">
				<div class="head">
					<h1>Just send</h1>
				</div>
				<form class="form">
					<h3>Message Code</h3>
					<div class="group">
						<?php echo $_GET['code'] ?>
  					</div>
  					<div class="group">
  					<a href="index.php">Home page </a>
  					</div>
				</div>     
			</div>
    	</div>
  	</div>


	

</body>
</html>

<!-- SELECT subject, message FROM message WHERE code='$code' -->