<?php 
$conn=mysqli_connect("localhost","root","","ehome");
$arr=array();
if($conn){
	$sel="select *from images";
	$row=mysqli_query($conn,$sel);
	if($row){
		while($res=mysqli_fetch_assoc($row)){
array_push($arr, $res);
		}
	}
}
echo json_encode($arr);
 ?>
