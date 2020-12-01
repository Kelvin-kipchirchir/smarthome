<?php 
$host=$_POST["s"];
$arr=array();
$conn=mysqli_connect("localhost","root","","ehome");
if($conn){
	$del="DELETE from rental where id='$host'";
	if(mysqli_query($conn,$del)){
echo "success";
	}else{
		echo "error";
	}
}else{
	echo "failure";
}
//echo json_encode($arr);

 ?>