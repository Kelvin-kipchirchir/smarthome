<?php 
$name=$_POST["username"];
$em=$_POST["email"];
$ph=$_POST["phone"];
$pass=$_POST["pasword"];
$conn=mysqli_connect("localhost","root","","ehome");
if($conn){
	$sel="select *from admin where email='$em'";
	$row=mysqli_query($conn,$sel);
	if($row->num_rows>0){
		echo "user already exist";
	}else{
		$inser="INSERT INTO admin (username, email, phone, password) VALUES ('$name', '$em', '$ph', '$pass')";
		if(mysqli_query($conn,$inser)){
			echo "registration success";
		}else{
			echo "error";
		}
	}
}


 ?>