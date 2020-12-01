<?php
$id=$_POST["id"];
$name=$_POST["ownername"];
$pho=$_POST["phoneno"];
$em=$_POST["email"];
$add=$_POST["address"];
$ress=$_POST["residence"];
$conn=mysqli_connect("localhost","root","","ehome");
if($conn){
	$upd="UPDATE owners SET ownername ='$name',phoneno='$pho',email='$em',address='$add',residence='$ress' where idno='$id'";
	if(mysqli_query($conn,$upd)){
		echo "success";
	}else{echo "error";}
}


  ?>