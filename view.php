<?php
include 'smarthome.html';
?>
	<link rel="stylesheet" type="text/css" href="smarthome.css">


<script type="text/javascript" src="script.js"></script>
<div id="mainhome">
 <form id="form"  enctype="multipart/form-data" accept-charset="utf-8" method="post" action="view.php" >
		<div><label id="lab">Search<br></label>
		<input type="text" name="city" id="loca" placeholder="city"  visibility="gone">
			
		</div>
		
		<div id="button" style="display: none"><button id="btn" type="submit"  value="submit">search</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
	</form>
	<?php
$loc=$_POST['city'];
$conn=mysqli_connect("localhost","root","","ehome");
if($conn){
$sel="select * from rental  where city='$loc'";
	$row=mysqli_query($conn,$sel);
	if($row->num_rows>0){
		echo "<table border='1' color:grey id='tab'>
		<tr>
		<th>Profile</th>
		<th>Category</th>
		<th>Title</th>
		<th>Rental name</th>
		<th>Description</th>
		<th>Location</th>
		<th>Buying price</th>
		<th>Renting price</th>
		<th>Number of rooms</th>
		<th>Bedrooms</th>
		<th>Bathrooms</th>
		<th>Update</th>
		<th>Delete</th>
         </tr>
		";
		while ($res=mysqli_fetch_assoc($row)) {
			echo '<tr>
		 <td><img id="ima" src="http://localhost/images/'.$res["image"].'"/></td>
		  <td>'.$res["category"].'</td>
		  <td>'.$res["title"].'</td>
		 <td>'.$res["rentalname"].'</td>
		 <td>'.$res["description"].'</td>
		  <td>'.$res["address"].'</td>
		 <td>'.$res["buyprice"].'</td>
		  <td>'.$res["rentprice"].'</td>
		 <td>'.$res["rooms"].'</td>
		  <td>'.$res["bedrooms"].'</td>
		 <td>'.$res["bathrooms"].'</td>
	     <td><button type="button" id="bt" onclick="return updating('.$res["id"].')">update</button></td>
	     <td><button type="button" id="bt"  onclick="return deletes('.$res["id"].')">delete</button></td>
	     </tr>';

		}
		echo "</table>";
	}else{}
}else{}

  ?>
  <script type="text/javascript">
	function deletes(s,e){
		alert(s)
		var p=confirm("are you sure");
		if(p){
			var ajax=new XMLHttpRequest();
			ajax.onreadystatechange=function(){
				if(this.readyState==4 && this.status==200){
					if(this.responseText=="success"){}
				}
			}
			ajax.open("POST","delete.php",true);
			ajax.setRequestHeader("content-type","application/x-www-form-urlencoded");
			ajax.send("s="+s);
		}
	}
	function updating(a){
	localStorage.setItem("id",a);
	window.location.replace('form.php');
			}
</script>
	<style type="text/css">
	#tab{
			background-color: #EEEEEE;
			margin-top: 30px;
			border:1px solid #00A475;
	        text-align: left;
			margin-left: 30px;
			width: 90%;
			margin-right: 30px;
		}
		#tab th{
			background-color: #1C6EA4;
			color: white;
			font-size: 20px;
		}
		#tab tr{
			background-color: #DOE4F5;
		}
			#tab td{
			font-size: 19px;
		}
		label{
			margin-top: 150px;
			margin-left: 20px;
		}
		#lab{
			margin-left: 400px;
			float: left;
			margin-top: 20px;
			
		}
		#form button{
			margin-top: 40px;
			margin-left: -1200px;
		}
		#agent{
			height: 300px;
			width: 300px;
			margin-top: 40px;
			border-radius: 10px;

		}
		#form input{
			margin-left: 20px;
		}
		#ima{
			height: 50px;
			width: 50px;
			border-radius: 30px;
		}
		#bt{
			float: left;
			height: 40px;
			width: 80%;
		}
	</style>
	</div>
<script type="text/javascript">
document.getElementById("mainhome").style.display="none";
	document.getElementById("ground").innerHTML=document.getElementById("mainhome").innerHTML;
</script>
