<?php
$loc=$_POST['location'];
$arr=array();
$conn=mysqli_connect("localhost","root","","ehome");
if($conn){
$sel="select * from rental  where city='$loc'";
	$row=mysqli_query($conn,$sel);
	if($row->num_rows>0){
		while ($res=mysqli_fetch_assoc($row)) {
			array_push($arr, $res);

		}
	}else{
		$mess="nobody";
	}
}else{
	echo "error connecting";
}
echo json_encode($arr);

  ?>