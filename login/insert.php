<?php

$con = mysqli_connect('127.0.0.1','root','');

if(!$con)
{
	echo 'NOT CONNECTED TO SERVER';

}

if(!mysqli_select_db($con,login_account))
{
	echo 'DATABASE Not Selected';

}

$Name=$_POST('Name');
$SSN=$_POST('SSN');
$Email=$_POST('Email');

$sql = "INSERT INTO person(Name,SSN,Email) VALUES ('$Name','$SSN','$Email')";

if(!mysqli_query($con,$sql))
{
	echo 'NOT INSERTED';

}
else
{
	echo 'Inserted';

}

header("refresh:2; url=index.html");

?>