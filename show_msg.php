<?php
include('connection.php');
 $code =$_GET['code'];
?>



<!DOCTYPE html>
<html>
<head>
<title>read the message</title>
<link rel="stylesheet" type="text/css" href="style1.css">
<meta name="viewport" content= "width=device-width, initial-scale=1.0"> 
</head>
<body>
   <?php
  
   	
     $query = "SELECT * FROM messages WHERE code='$code'";
$data = mysqli_query($db,$query);
$row=mysqli_fetch_assoc($data);
  //echo $row["code"].'  '.$row["subject"]
?>

<div class="header">
<h2>JUstSend</h2>
</div>

<div class="content">
<p>Name : <?php echo $row["name"]?></p>
</div>

<div class="subject">
<p>Subject : <?php echo $row["subject"]?></p>
</div>

<div class="subject">
<p><?php echo $row["msg"]?></p>
</div>


</body>
</html>
