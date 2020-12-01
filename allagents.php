<?php
$conn=mysqli_connect("localhost","root","","ehome");
$id=$_POST['id'];
$arr=array();
if($conn){
	$sqi=mysqli_query($conn,"select * from owners where idno='$id'");
	if ($sqi) {
		while ($row=mysqli_fetch_assoc($sqi)) {
			array_push($arr, $row);
		}
	}else{
		echo "failed";
	}
}
echo json_encode($arr);
?>