<!DOCTYPE html>
<html>
<head>
	<title>
		Receiver page
	</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="receiver.css">

</head>
<body>
	<div class="container">
		<div class="contant">
			<div class="main">
				<div class="head">
					<h1>Just send</h1>
				</div>
				<form class="form" action="connection.php" method="post">
					<div class="input-group">
						<input type="text" name="name" placeholder="name">
					</div>
  					 
					<div class="input-group">
						<input type="text" name="email_or_phone" placeholder="Email or Phone">
					</div>
  					
					<div class="input-group">
						<input type="text" name="subject" placeholder="subject">
					</div>
  					
					<div class="input-group">
						<textarea name="message" name="message"></textarea>  					
					</div>
  					
					<div class="group">
						<button type="button" name="image">pic</button>  						  				
						<button type="button" name="file">File</button>
					</div>

  					<div class="group">
    					<button type="submit" class="btn btn--wide" name="send">
    					Send
    					</button>
  					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>