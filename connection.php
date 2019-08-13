<?php

echo "here";
session_start();

//initilize variables.
$name = "";
$email_or_phone ="";
$subject ="";
$msg ="";
$image ="";
$id =0;


//connect to  database
$db = mysqli_connect('localhost', 'root', '', 'justsend');

 
//if send button is clicked.
if (isset($_POST['send']))
{

	function code_generate() 
	{
	  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
	  return substr(str_shuffle($data), 0, 6);
	}

	echo 'here';
	//echo "here";
	$name = $_POST['name'];
	$email_or_phone =$_POST['email_or_phone'];
	$subject =$_POST['subject'];
	$message =$_POST['message'];
	$code =code_generate();
	$id=0;

  echo code_generate();


	$query = "INSERT INTO message (name, email_or_phone, subject, message, code)VALUES('$name','$email_or_phone','$subject','$message','$code')";



	if(mysqli_query($db, $query)) {
		echo header("Location:show_code.php?code=".$code);
	} else {
		echo 'error:'.$query.'   check: '.$db->error;
	}
	// check connection
	if ($db->connect_error){
		die("connection failed:" . $db->connect_error);
	}
	else {
		echo "connected successfully";
	}                        
           
}

?>