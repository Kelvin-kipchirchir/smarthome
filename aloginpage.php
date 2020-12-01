<?php
include 'index.php';
?>
	<link rel="stylesheet" type="text/css" href="admin.css">
	<script type="text/javascript" src="script.js"></script>
<div id="mainhome">
<div class="header">
	<h2>Admin login</h2>
</div>
<form method="post" action="adminlogin.php">
<img id="agen" src="images/owner.jpeg" width="100" height="100">
	<div class="input-group">
		<label>Username:</label>
		<input type="text" name="username" id="username" >
		
	</div>
	<div class="input-group"><br>
		<label >Password:</label><br>
		<input type="password" name="password" id="password" ><br>
		<div><span id="uname"></span></div>
		<div><span id="psname"></span></div>
	</div>
	<div class="input-group"> 
	<button type="button" name="submit" id="btn" class="btn" onclick="return fun()">login</button> 
	</div>
	<p>New member?<a href="aregistrationpage.php">create account</p>
</form>
	</div>
	<style type="text/css">
		.input-group input{
margin-left: 20%;
		}
		.input-group button{
		  margin-left: 35%;
		  width: 30%;
		}
		#agen{
			margin-left: 200px;
		}
		.input-group label{
			margin-left: 10%;
			float: left;
			width: 20px;
			margin-left: 100px;
		}

	</style>
<script type="text/javascript">
document.getElementById("mainhome").style.display="none";
	document.getElementById("ground").innerHTML=document.getElementById("mainhome").innerHTML;
</script>
