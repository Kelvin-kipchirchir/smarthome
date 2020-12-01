<?php 
$id=$_POST["s"];
$arr=array();
echo $id;
$conn=mysqli_connect("localhost","root","","ehome");
if($conn){
	$del="DELETE from owners where idno='$id'";
	if(mysqli_query($conn,$del)){
echo "success";
	}else{
		echo "error";
	}
}else{
	echo "failure";
}
//echo json_encode($arr1);

 ?>