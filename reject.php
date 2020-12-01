<?php
$id=$_POST["s"];
echo $id;
$conn=mysqli_connect("localhost","root","","ehome");
if($conn){
	$upd="UPDATE purchase SET status='withdrawed' WHERE id='$id'";
	if(mysqli_query($conn,$upd)){
		echo "success";
	}else{
		echo "error";
	}
}
  ?>



