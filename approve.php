<?php
$id=$_POST["s"];
$cat=$_POST["category"];
echo $cat;
$conn=mysqli_connect("localhost","root","","ehome");
if($conn){
		$upd="UPDATE purchase SET status='bought' WHERE id='$id'";
	if(mysqli_query($conn,$upd)){
		echo "success";
	}else{
		echo "error";
	}

	
}


  ?>
