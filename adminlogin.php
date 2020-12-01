<?php  
$name=$_POST["username"];
$pass=$_POST["password"];
$arr=array();
$conn=mysqli_connect("localhost","root","","ehome");
if($conn){
	$sel="select *from admin where username='$name'";
	$row=mysqli_query($conn,$sel);
	if($row->num_rows>0){
		$mess= "exist";
	}else{
		$mess="not there";
}	
}else{
	$mess= "failure";
}



?>