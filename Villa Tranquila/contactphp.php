<?php
	$mail="example@exmaple.com";		
	$name=$_POST("name");
	$email=$_POST("email");
	$message=$_POST("message");
	$thank="thank.html";
	$message="
	name:".$name."
	email:".$email."
	message:".$message.";
	if(mail($email,"form",$message))header"(location:$thank");?>
	
	

