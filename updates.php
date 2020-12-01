<?php
$id=$_POST["id"];
$name=$_POST["rentalname"];
$tit=$_POST["title"];
$buy=$_POST["buyprice"];
$address=$_POST["address"];
$rent=$_POST["rentprice"];
$room=$_POST["rooms"];
$bed=$_POST["bedrooms"];
$bath=$_POST["bathrooms"];
$conn=mysqli_connect("localhost","root","","ehome");
if($conn){
	$upd="UPDATE rental SET rentalname ='$name',title='$tit',buyprice='$buy',address='$address',rentprice='$rent',rooms='$room',bedrooms='$bed',bathrooms='$bath' where id='$id'";
	if(mysqli_query($conn,$upd)){
		echo "success";
	}else{echo "error";}
}


  ?>