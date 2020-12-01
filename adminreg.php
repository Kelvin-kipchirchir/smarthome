<?php

include 'smarthome.html';
?>
<div id="mainhome">
	<link rel="stylesheet" type="text/css" href="admin.css">
	<script type="text/javascript" src="script.js"></script>
<div class="header">
	<h2>register</h2>
</div>
<form method="post" action="admin.php" id="forme">
<img src="owner.jpeg" width="100" height="100" style="margin-left: 100px">
	<div class="input-group">
		<label>Username:</label>
		<input type="text" name="username" id="username" style="margin-left: 20%">
		<div><span id="uname"></span></div>
	</div>
	<div class="input-group">
		<label>Email:</label>
		<input type="text" name="email" required="" id="email" style="margin-left: 20%">
		<div><span id="ename"></span></div>
	</div>
	<div class="input-group">
		<label>Phone:</label>
		<input type="text" name="phone" required="" id="phone" style="margin-left: 20%">
		<div><span id="pname"></span></div>
	</div>
	<div class="input-group">
		<label>Password:</label>
		<input type="text" name="password" required="" id="password" style="margin-left: 20%">
		<div><span id="psname"></span></div>
	</div>
	<div class="input-group">
		<label>ConfirmPassword:</label>
		<input type="text" name="cpassword" required="" id="cpassword" style="margin-left: 20%">
		<div><span id="cpsname"></span></div>
	</div>
	<div class="input-group"> 
		<button type="button" name="submit" class="btn" style="margin-left: 35%" onclick="return logg()">register</button> 
	</div>
	<p>Are you already a member?<a href="adlogin.php">login</p>
</form>
</div>
<script type="text/javascript">
	document.getElementById("mainhome").style.display="none";
	document.getElementById("ground").innerHTML=document.getElementById("mainhome").innerHTML;


</script>