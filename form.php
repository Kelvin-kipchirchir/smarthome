<?php
include 'smarthome.html';
?>
<link rel="stylesheet" type="text/css" href="smarthome.css">
<script type="text/javascript" src="script.js"></script>
<div id="mainhome">
	<form id="fom" method="post" enctype="multipart/form-data"  action="updates.php" >
	<div id="formation">
		<div><label>title:
	<input type="text" name="title" id="title" required=""></label></div>
	<div><label>category:
	<input type="text" name="category" id="category" required=""></label></div>
	<div><label>rentalname:
	<input type="text" name="rentalname" id="rentalname" required="" ></label></div>
	<div id="uname"></div>
	  <div><label>adress:
	<input type="text" name="address" id="address" required=""></label></div>
	
	</div>
  
	<div id="formation2">
	<div><label>Buying price:
	<input type="text" name="buyprice" id="buyprice" required=""></label></div>
	<div><label>rent price:
	<input type="text" name="rentprice" id="rentprice" required=""></label></div>
	<div><label>rooms:<br>
	<input type="text" name="rooms" id="rooms" required=""></label></div>
	<div><label>bedrooms:<br>
	<input type="text" name="bedrooms" id="bedrooms" required=""></label></div>
	<div><label>bathrooms:<br>
	<input type="text" name="bathrooms" id="bathrooms" required=""></label></div>	
	</div>
	<button id="bu" type="button" name="submit" value="submit" onclick="return update();" >update</button>
</form>

</div>
<style type="text/css">
#fom{
	margin-top: 30px;
	float:left;
	margin-left: 50px;
	width: 90%;
	background-color: silver;
	height: 500px;
	border-radius: 10px;
	}
	#form button{
		margin-left: 120px;
	}
		#formation{
	float:left;
	margin-left: 250px;
	margin-top: 25px;
	}
	#formation2{
	float:right;
	margin-right: 300px;
   width: 50%;
	
	margin-top: -200px;
	}
	#formation2 label{
		font-size: 25px;
		margin-left:350px;
		float:left;
	width: 50%;
	
	}
	#bu{
		background-color: blue;
		float: left;
		width: 10%;
		margin-left: 300px;
		margin-top: 30px;
	}
	

</style>
<script type="text/javascript">

document.getElementById("mainhome").style.display="none";
	document.getElementById("ground").innerHTML=document.getElementById("mainhome").innerHTML;
	function inser(){
		var id=localStorage.getItem("id");
var formdata=new FormData(document.getElementById("fom"));
		formdata.append("id",id);
		var name=document.getElementById("rentalname");
		var add=document.getElementById("address");
		var title=document.getElementById("title");
		var cat=document.getElementById("category");
		var buy=document.getElementById("buyprice");
		var rent=document.getElementById("rentprice");
		var rooms=document.getElementById("rooms");
		var bed=document.getElementById("bedrooms");
		var bath=document.getElementById("bathrooms");
		var ajax=new XMLHttpRequest();
					ajax.onreadystatechange=function(){
				if(this.readyState==4 && this.status==200){
					var res=JSON.parse(this.responseText);
					for (var i = 0; i < res.length; i++) {
						name.value=res[i].rentalname;
						title.value=res[i].title;
						add.value=res[i].address;
						cat.value=res[i].category;
						buy.value=res[i].buyprice;
						rent.value=res[i].rentprice;
						rooms.value=res[i].rooms;
						bed.value=res[i].bedrooms;
						bath.value=res[i].bathrooms;
			
		
						
					}
				}
			}
			ajax.open("POST","all.php",true);
			ajax.send(formdata);
		
		}
function update(){
			var id=localStorage.getItem("id");
		var name=document.getElementById("rentalname").value;
		var add=document.getElementById("address").value;
		var title=document.getElementById("title").value;
		var cat=document.getElementById("category").value;
		var buy=document.getElementById("buyprice").value;
		var rent=document.getElementById("rentprice").value;
		var rooms=document.getElementById("rooms").value;
		var bed=document.getElementById("bedrooms").value;
		var bath=document.getElementById("bathrooms").value;
		var ajax=new XMLHttpRequest();
		var formdata=new FormData(document.getElementById("fom"));
		formdata.append("id",id)
      formdata.append("rentalname",name)
      formdata.append("address",add)
      formdata.append("title",title)
      formdata.append("buyprice",buy)
       formdata.append("rentprice",rent)
       formdata.append("category",cat)
      formdata.append("rooms",rooms)
      formdata.append("bedrooms",bed)
      formdata.append("bathrooms",bath)
		ajax.onreadystatechange=function(){
			if(this.readyState==4 && this.status==200){
				alert(this.responseText);
			if(this.responseText=="sucess"){alert("success")

		}


			}
		}
		ajax.open("POST","updates.php",true);
		ajax.send(formdata);
		document.getElementById("fom").reset();

	}


	
	
</script>
<script type="text/javascript">
	inser();
</script>