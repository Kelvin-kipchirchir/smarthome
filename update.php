<?php
include 'smarthome.html';
?>
	<link rel="stylesheet" type="text/css" href="home.css">

<script type="text/javascript" src="script.js"></script>

<div id="mainhome">
<form id="form"  enctype="multipart/form-data" accept-charset="utf-8" method="post" action="rentalsearch.php" >
		<label id="rent">rental name:<br><input type="text" name="rentalname" id="rentalname" placeholder="Enter name"></label>
		<div id="button"><button id="btn" type="button" onclick="return searching();">search</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
	</form>
	<div id="list"></div>
	<style type="text/css">
		#list{
		float: right;
		background-color: #efefef;
		padding: 15px;
		border-radius: 5px;
		width: 65%;
		color: black;
        margin-left: 30px;
        border:2px;
		text-align: left;
	}
	
		#list td{
			background-color: white;
			width: 30px;
		}
		#list tr{
			background-color: grey;
			width: 65%;
		}
	</style>
	</div>
	
<script type="text/javascript">
document.getElementById("mainhome").style.display="none";
	document.getElementById("ground").innerHTML=document.getElementById("mainhome").innerHTML;
</script>
