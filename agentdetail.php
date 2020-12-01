<?php
$owner=$_POST['ownername'];
$phone=$_POST['phoneno'];
$email=$_POST['email'];
$pos=$_POST['position'];
$pro=$_POST['property'];
$idno=$_POST['idno'];
$add=$_POST['address'];
$res=$_POST['residence'];
$conn=mysqli_connect("localhost","root","","ehome");
$arr=array();
if($conn){
	$sel="select *from owners where idno='$idno'";
	$row=mysqli_query($conn,$sel);
	if($row->num_rows>0){
		echo "exists";
	}else{
	$file_name=$_FILES["image"]["name"];
	$target="/xampp/htdocs/images/";
if (move_uploaded_file($_FILES["image"]['tmp_name'],$target.$file_name)) {
	$inser="INSERT INTO owners (ownername, phoneno, position, email, propertyname,idno,image,address,residence) VALUES ('$owner', '$phone', '$pos', '$email', '$pro','$idno','$file_name','$add','$res')";
	
	if(mysqli_query($conn,$inser)){
		echo "success";
	}else{
		echo "error";
	}
}else{
	echo "Error Uploading Images try again";
}
		
	
	}	
}else{
	echo "failure";
}
?>
