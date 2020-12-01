<?php
include 'smarthome.html';
?>
	<link rel="stylesheet" type="text/css" href=".css">
	<script type="text/javascript" src="script.js"></script>
<div id="mainhome">
<form method="post" action="rentalreg.php" id="form" enctype="multipart/form-data">
 <div id="formation">
 <div><label> Type:</label>
	<select name="title" style="margin-left: 40px;"> 
	<option value="0">Select</option>
	<option value="buying"  id="title"  >Buying</option> 
	 <option value="selling"  id="title" >Selling</option>
	  <option value="leasing"  id="title" >leasing</option>
</select></div>
	<div><span id="rname"></span></div> 
	<div><label> Category:</label>
	<select name="category" style="margin-left: 10px;"> 
	<option value="0">Select</option>
	<option value="flats" id="category" >flats</option>
	 <option value="rentals" id="category" >rentals</option> 
	 <option value="hostels"  id="category" >hostels</option> 
	 <option value="homes"  id="category" >homes</option>
</select></div><br>
 <div><label>Property name:<br><input id="rental" type="text" name="rentalname"  placeholder="property name" /></label></div>
 <div><span id="rname"></span></div>
 	<div><label>Property description:<br>
	<textarea cols="40" name="comments" rows="6" id="description" name="description"></textarea>
</label></div><br>
 <div><label id="pic">profile pic:<input id="prof" type="file" name="prof"></label></div><br>
	</div>
	<br> 
	<div><span id="rname"></span></div>
<div id="formation2">

     <div><label> Buying price:</label>
	<select name="buyprice" style="margin-left: 5px;"> 
	<option value="0">Select</option>
	<option value="100000"  id="buyprice" >100000</option> 
	<option value="200000"  id="buyprice" >200000</option>
	<option value="250000" id="buyprice" >250000</option>
	<option value="300000"  id="buyprice" >300000</option>
     </select></div><br>
    <div><label> Rent price:</label>
	<select name="rentprice" style="margin-left: 25px;"> 
	<option value="0">Select</option>
	<option value="10000" id="rentprice">10000</option> 
	<option value="20000" id="rentprice" >20000</option>
	<option value="25000" id="rentprice" >25000</option>
	<option value="30000" id="rentprice" >30000</option>
     </select></div><br>
     <div><label> Rooms:</label>
	<select name="rooms" style="margin-left: 50px;"> 
	<option value="0">Select</option>
	<option value="3"  id="rooms">3</option> 
	<option value="4"  id="rooms" >4</option>
	<option value="5" id="rooms" >5</option>
	<option value="6"  id="rooms" >6</option>
	<option value="7"  id="rooms" >7</option>
     </select></div><br>
		  <div><label> Period:</label>
	<select name="period" style="margin-left: 50px;"> 
	<option value="0">Select</option>
	<option value="3"  id="period">3</option> 
	<option value="6"  id="period" >6</option>
	<option value="9"  id="period" >9</option>
	<option value="12"  id="period" >12</option>
	<option value="7"  id="period" >7</option>
     </select></div><br>		
	
			  <div><label> Bedrooms:</label>
	<select name="bedrooms" style="margin-left: 20px;"> 
	<option value="0">Select</option>
	<option value="2"  id="bedrooms"</option> 
	<option value="3"  id="bedrooms" >3</option>
	<option value="4"  id="bedrooms" >4</option>
	<option value="5"  id="bedrooms" >5</option>
	<option value="6"  id="bedrooms" >6</option>
     </select></div><br>		
    		  <div><label> Bathrooms:</label>
	<select name="bathrooms" style="margin-left: 15px;"> 
	<option value="0">Select</option>
	<option value="2"  id="bathrooms">2</option> 
	<option value="3"  id="bathrooms">3</option>
	<option value="4"  id="bathrooms">4</option>
     </select></div><br>
				<div><label id="pic">profile pic:<input id="photo" type="file" name="files[]" multiple ></label></div><br>

</div><br>

<div id="formation3">
	
				<div><label>Location:<br><input id="location" type="text" name="location" placeholder="location"/></label></div><br>
				<div><span id="lname"></span></div>
				<div><label>Address:<br><input id="address" type="text" name="address" placeholder="address"/></label></div><br>
				<div><span id="aname"></span></div>
				<div><label>County:<br><input id="county" type="text" name="county" placeholder="location"/></label></div><br>
				<div><span id="lname"></span></div>
				<div><label>city:<br><input id="city" type="text" name="city" placeholder="location"/></label></div><br>
				<div><span id="lname"></span></div>
				<div><button id="btn" type="button" onclick="return newproperty()";>Save</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
</div><br>

</form>
	</div>
	<style type="text/css">
			#formation{
	float:left;
	margin-left: 50px;
	margin-top: 50px;
	}
	#formation2{
	float:left;
	margin-left: 50px;
	margin-top: 70px;

	}
	#formation3{
	float:left;
	margin-right:50px;
	margin-top: 70px;

	}
	#form input{
		border: none;
		border-bottom: 2px solid red;
	}
	#form select{
		color: black;
		width: 200px;
		background-color: ;
		margin-left: 50px;
		height: 40px;
		border-radius: 10px;
	}
		#form option{
		font-size: 19px;
	}
		#form label{
		font-size: 25px;
	}
		#btn{
		margin-top: 150px;
		font-size: 19px;
		background-color: blue;
		float: left;
		margin-left: 20px;
width: 80%;
	}
	#description{
		background-color:#f8f8f8;
		border-radius: 4px;
		resize: none;

	}
	</style>
<script type="text/javascript">
document.getElementById("mainhome").style.display="none";
	document.getElementById("ground").innerHTML=document.getElementById("mainhome").innerHTML;
</script>
