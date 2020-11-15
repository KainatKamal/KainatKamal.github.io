<?php
	if(isset($POST['submit']))
	  {
	    $name=$_POST['contactName'];
	    $email=$_POST['contactEmail'];
	    $subject=$_POST['contactSubject'];
	    $msg=$_POST['contactMessage'];

	    $to='kainat.kamal29@gmail.com
	    $message="Name: ".$name."\n"."Wrote the following: "."\n\n".$msg;
	    $headers="From: ".$email;

	    if(mail($to, $subject, $message, $headers))
		{
		  echo "<h1>Sent Successfully! Thank you"." ".$name.", we will contact you shortly.</h1>";
		}
	    else{
		  echo "Something went wrong!";
		}
	   }
?>