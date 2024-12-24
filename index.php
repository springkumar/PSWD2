<?php

if($_SERVER['REQUEST_METHOD']== 'POST')
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];	
	$email=$_POST['email'];
	$birth=$_POST['dateofbirth'];
	$telephone=$_POST['tel'];
	$vehicle1=$_POST['vehicle1'];
	$vehicle2=$_POST['vehicle2'];
	$vehicle3=$_POST['vehicle3'];
	$gender=$_POST['gender'];

	echo"<h3 color=red> <b> you have sucessfully registered</b> </h3>";

	echo "User Firstname and lastname:". $fname.$lname. "<br>";

	echo "Email is:". $email. "<br>";
	echo "Birthdate:". $birth. "<br>";
	echo "Telephone number:". $telephone."<br>";
	echo "I am Having the following vehicle:". $vehicle1.",".$vehicle2.",".$vehicle3. "<br>";
	echo "My gender:".$gender."<br>";
       
	
}
else
{
	echo "you re accessing  wrong request";
}

?>
