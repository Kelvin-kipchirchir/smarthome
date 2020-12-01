<?php
include 'smarthome.html';
?>
	<link rel="stylesheet" type="text/css" href="smarthome.css">
<script type="text/javascript" src="script.js"></script>
<div id="mainhome">
<h1 id="bb">New Agent</h1>
 <form method="post"  id="form" action="agentdetail.php" enctype="multipart/form-data" accept-charset="utf-8">
<div id="formation">
	<div ><label>Agents name:<br><input id="ownername" type="text" name="ownername" /></label></div><br>
				<div><span id="oname"></span></div>
				<div ><label>profile pic:<br><input id="ima" type="file" name="image" ></label></div><br>
				<div ><label>Property name:<br><input id="property" type="text" name="property"/></label></div>
				<div><span id="ename"></span></div>
				<div ><label>phone no:<br><input id="phoneno" type="text" name="phoneno" /></label></div>
				<div><span id="pname"></span></div>
				</div>
<div id="formation2">
<div ><label>National ID:<br><input id="idno" type="text" name="idno" /></label></div><br>
				<div><span id="idno"></span></div>
<div ><label>Residence:<br><input id="residence" type="text" name="residence" /></label></div><br>
				<div><span id="pos"></span></div>
				<div ><label>Email:<br><input id="email" type="text" name="email" /></label></div>
				<div><span id="ename"></span></div>
				<div ><label>Address:<br><input id="address" type="text" name="address" /></label></div><br>
				<div><span id="pos"></span></div>
			<div id="button"><button id="btn" type="button" onclick="return agent()"; >Save</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
			</div>
</form>
	</div>
	<style type="text/css">
		#gen{
	height: 80px;
	width: 80px;
	margin-left: 30px;
	border-radius: 10px;
		}
		#formation{
	float:left;
	margin-left: 250px;
	margin-top: 70px;
	}
	#formation2{
	float:right;
	margin-right: 400px;
   width: 50%;
	
	margin-top: -200px;

	}
	#formation2 label{
		font-size: 25px;
		margin-left:350px;
		float:left;
	width: 50%;
	
	}
	#btn{
		margin-top: 300px;
width: 100%;
background-color: blue;
margin-left: -850px;
	}
	#bb{
		margin-top: 30px;
		color: blue;
		float: left;
		margin-left: -500px;
	}
	</style>
<script type="text/javascript">
document.getElementById("mainhome").style.display="none";
	document.getElementById("ground").innerHTML=document.getElementById("mainhome").innerHTML;
</script>
