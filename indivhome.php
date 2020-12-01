<?php
$name=$_POST['rentalname'];
$arr=array();
$conn=mysqli_connect("localhost","root","","ehome");
if($conn){
$sel="select * from rental INNER join rental_images  ON rental.rentalname = rental_images.rentalname  where rental.rentalname='$name'";
	$row=mysqli_query($conn,$sel);
	if(mysqli_num_rows($row)>0){
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