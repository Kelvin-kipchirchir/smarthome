<?php
include 'smarthome.html';
?>
	<link rel="stylesheet" type="text/css" href="smarthome.css">


<script type="text/javascript" src="script.js"></script>
<div id="mainhome">
<h1 id="bb">Agents information</h1> 
 <form id="form"  enctype="multipart/form-data" accept-charset="utf-8" method="post"  >
	</form>
	<?php
$conn=mysqli_connect("localhost","root","","ehome");
if($conn){
$sel=" SELECT * FROM owners";
	$row=mysqli_query($conn,$sel);
	if($row->num_rows>0){
		echo "<table border='1' color:grey id='tab'>
		<tr>
		<th>Profile</th>
		<th>Agents name</th>
		<th>ID No</th>
		<th>Residence</th>
		<th>property</th>
		<th>Phone no</th>
		<th>Email</th>
		<th>Address</th>
		<th>Update</th>
		<th>Delete</th>
         </tr>
		";
		while ($res=mysqli_fetch_assoc($row)) {
			echo '<tr>
		 <td><img id="ima" src="http://localhost/images/'.$res["image"].'"/></td>
		  <td>'.$res["ownername"].'</td>
		 <td>'.$res["idno"].'</td>
		  <td>'.$res["residence"].'</td>
		 <td>'.$res["propertyname"].'</td>
		  <td>'.$res["phoneno"].'</td>
		 <td>'.$res["email"].'</td>
		  <td>'.$res["address"].'</td>
	     <td><button type="button"  id="btn" onclick="return updating('.$res["idno"].')">update</button></td>
	     <td><button type="button"  id="btn"  onclick="return deletes('.$res["idno"].')">delete</button></td>
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
			ajax.open("POST","deleteagent.php",true);
			ajax.setRequestHeader("content-type","application/x-www-form-urlencoded");
			ajax.send("s="+s);
		}
	}
	function updating(a){
	localStorage.setItem("id",a);
	window.location.replace('formag.php');
			}
</script>
	<style type="text/css">
	#tab{
			background-color: #EEEEEE;
			margin-top: 100px;
			border:1px solid #00A475;
	text-align: left;
			margin-left: 30px;
			width: 90%;
			margin-right: 30px;
		}
		#tab th{
			background-color: #1C6EA4;
			font-size: 25px;
			color: white;
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
			margin-left: -450px;
			float: left;
			margin-top: 10px;
			
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
		#btn{
			size: 10px;
			float: left;
			height: 40px;
			width: 80%;
		}#bb{
			color: blue;
			float: left;
			margin-top: -50px;
			font-size: 30px;
			margin-left: -350px;
		}
		
	</style>
	</div>
<script type="text/javascript">
document.getElementById("mainhome").style.display="none";
	document.getElementById("ground").innerHTML=document.getElementById("mainhome").innerHTML;
</script>
