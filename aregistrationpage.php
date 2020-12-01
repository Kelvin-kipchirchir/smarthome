<?php
include 'index.php';
?>
<div id="mainhome">
	<link rel="stylesheet" type="text/css" href="admin.css">
	<script type="text/javascript" src="script.js"></script>
<div class="header">
	<h2>register</h2>
</div>
<form method="post" action="admin.php" id="forme">
<img id="agen" src="images/owner.jpeg">
	<div class="input-group">
		<label>Username:</label>
		<input type="text" name="username" id="username" >
		<div><span id="uname"></span></div><br>
	</div>
	<div class="input-group">
		<label>Email:</label>
		<input type="text" name="email" required="" id="email" autocomplete="off" >
		<div><span id="ename"></span></div>
	</div>
	<div class="input-group">
		<label>Phone:</label>
		<input type="text" name="phone" required="" id="phone" >
		<div><span id="pname"></span></div>
	</div>
	<div class="input-group">
		<label>Password:</label>
		<input type="password" name="password" required="" id="password" autocomplete="off" ><br>
		<div><span id="psname"></span></div>
	</div>
	<div class="input-group">
		<label>ConfirmPassword:</label>
		<input type="password" name="cpassword" required="" id="cpassword" autocomplete="off" ><br>
		<div><span id="cpsname"></span></div>
	</div>
	<div class="input-group"> 
		<button type="button" name="submit" class="btn" onclick="return logg()">Save</button> 
	</div>
	<p id="lk">Are you already a member?<a href=" aloginpage.php" >login</p>
</form>
</div>
	<style type="text/css">
		.input-group input{
        margin-left: 25%;
		}
		.input-group button{
			margin-left: 35%;
			width: 40%;
		}
		#agen{
			margin-left: 90px;
			width: 100px;
			height: 100px;
		}
		.input-group label{
			float: left;
			width: 20px;
			margin-left: 100px;
		}
		.input-group button{
		  margin-left: 35%;
		}
	
		#lk{
			margin-left: 30px;
		}
	</style>
<script type="text/javascript">
document.getElementById("mainhome").style.display="none";
	document.getElementById("ground").innerHTML=document.getElementById("mainhome").innerHTML;
</script>
