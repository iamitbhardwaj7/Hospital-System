<?php
	$name=$_POST["username"];
	$pass=$_POST["password"];

	
	$conn= new mysqli('localhost','root','','Doctor/Patient_login');
	if($conn->connect_error){
		die('Connection Failed : ' .$conn->connect_error);
	}

	
	
	$sql="select * from signin where name='$testuser' && password= '$testuserpass' ";
	$result= $conn->query($sql);


	if($result->num_rows>0){
	echo "duplicate data";
	}else{
	$stmt =$conn->prepare("insert into signin(name,password) values(?,?)");
	$stmt->bind_param("ss",$name,$pass);
	$stmt->execute();
	echo "registration successful....";
	$stmt->close();
	$conn->close();
	}


?>