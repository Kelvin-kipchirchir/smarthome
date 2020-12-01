
<?php
$title=$_POST['title'];
$gor=$_POST['category'];
$name=$_POST['rentalname'];
$des=$_POST['description'];
$buy=$_POST['buyprice'];
$rent=$_POST['rentprice'];
$loc=$_POST['location'];
$room=$_POST['rooms'];
$bed=$_POST['bedrooms'];
$bath=$_POST['bathrooms'];
$add=$_POST['address'];
$county=$_POST['county'];
$city=$_POST['city'];
$per=$_POST['period'];
$conn=mysqli_connect("localhost","root","","ehome");

$arr=array();

if($conn){

	$sel="select *from rental where rentalname='$name'";
	$row=mysqli_query($conn,$sel);
	if($row->num_rows>0){
		$mess= "exists";

	}else{
	$target="/xampp/htdocs/img/";
echo count($file_name=$_FILES["files"]["name"]);
	$file_name=$_FILES["files"]["name"];

$count=count($file_name);

echo $file_name=$_FILES["files"]["name"][1];
for($i=1;$i<$count;$i++) {
    $file_name=$_FILES["files"]["name"][$i];
    $file_tmp=$_FILES["files"]["tmp_name"][$i];

if (move_uploaded_file($file_tmp, $target.$file_name)) {
	
	$sql=mysqli_query($conn,"insert into rental_images (`image`, `rentalname`, `location`) values('$file_name','$name','$loc')");
	echo "my file is".$file_name;
	if ($sql) {
		echo "inserted";
	
	}
}else{
	echo "Error Uploading Images try again";
}
}
	$file_name=$_FILES["prof"]["name"];
	$target="/xampp/htdocs/images/";
if (move_uploaded_file($_FILES["prof"]['tmp_name'],$target.$file_name)) {
	
		$inser="INSERT INTO `rental`(`title`,`rentalname`,`description`, `location`, `address`, `buyprice`,`rentprice`, `rooms`, `bedrooms`, `bathrooms`,`county`, `city`, `longi`, `lati`,image,`category`,period) VALUES ('$title','$name','$des','$loc','$add','$buy','$rent','$room','$bed','$bath','$county','$city','0','0','$file_name','$gor','$per')";
		}else{
			echo "sijui";
		}

	if (mysqli_query($conn,$inser)) {
		$mess= "ok";
		# code...
	}
	else{
		$mess="error";

	}
	}
	
	
}else{
	$mess= "failure";
}
$arr['response']=$mess;
echo json_encode($arr);

  ?>