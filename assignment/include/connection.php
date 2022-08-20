<?php 
	$c= mysqli_connect("localhost","root","","dera_resturant");
	if(!$c){
		die("connection Failed".mysqli_connect_error());
	}
?>