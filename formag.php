<?php
include 'smarthome.html';
?>
<link rel="stylesheet" type="text/css" href="smarthome.css">
<script type="text/javascript" src="script.js"></script>
<div id="mainhome">
	<form id="fom" method="post" enctype="multipart/form-data"  action="allagents.php" >
	<div id="formation">
		<div><label>Agent Name:
	<input type="text" name="ownername" id="ownername" required=""></label></div>
	<div><label>Property Titled:
	<input type="text" name="propertyname" id="propertyname" required="" ></label></div>
	<div id="uname"></div>
	<div><label>Phone No:
	<input type="text" name="phoneno" id="phoneno" required=""></label></div>
	<div><label>Email:
	<input type="text" name="email" id="email" required="" ></label></div>
	<div id="uname"></div>
		<div><label>Address:
	<input type="text" name="address" id="address" required=""></label></div>
	<div><label>Residence:
	<input type="text" name="residence" id="residence" required="" ></label></div>
	<div id="uname"></div>
	
	
	</div>
	<div>
		<button id="bu" type="button" name="submit" value="submit" onclick="return update();" >update</button>
	</div>
</form>

</div>
<style type="text/css">
#fom{
	float:left;
	margin-left: 250px;
	width: 60%;
	height: 500px;
	background-color: silver;
	border-radius: 10px;
	}
	#bu{
		margin-left: -300px;
		background-color: blue;
		margin-top: 450px;
		width: 20%;
		float: left;
	}
		#formation{
	float:left;
	margin-left: 250px;
	margin-top: 75px;
	}


</style>
<script type="text/javascript">

document.getElementById("mainhome").style.display="none";
	document.getElementById("ground").innerHTML=document.getElementById("mainhome").innerHTML;
	function inser(){
		var id=localStorage.getItem("id");
var formdata=new FormData(document.getElementById("fom"));
		formdata.append("id",id);
		var name=document.getElementById("ownername");
		var ph=document.getElementById("phoneno");
		var prop=document.getElementById("propertyname");
		var em=document.getElementById("email");
		var resi=document.getElementById("residence");
		var add=document.getElementById("address");
		var ajax=new XMLHttpRequest();
					ajax.onreadystatechange=function(){
				if(this.readyState==4 && this.status==200){
					var res=JSON.parse(this.responseText);
					for (var i = 0; i < res.length; i++) {
						name.value=res[i].ownername;
						ph.value=res[i].phoneno;
						em.value=res[i].email;
						prop.value=res[i].propertyname;
						resi.value=res[i].residence;
						add.value=res[i].address;
					
					
					}
				}
			}
			ajax.open("POST","allagents.php",true);
			ajax.send(formdata);
		
		}
function update(){
			var id=localStorage.getItem("id");
	var name=document.getElementById("ownername").value;
		var ph=document.getElementById("phoneno").value;
		var prop=document.getElementById("propertyname").value;
		var em=document.getElementById("email").value;
		var resi=document.getElementById("residence").value;
		var add=document.getElementById("address").value;
		var ajax=new XMLHttpRequest();
		var formdata=new FormData(document.getElementById("fom"));
		formdata.append("id",id)
      formdata.append("ownername",name)
      formdata.append("phoneno",ph)
      formdata.append("propertyname",prop)
      formdata.append("em",email)
       formdata.append("residence",resi)
         formdata.append("address",add)
		ajax.onreadystatechange=function(){
			if(this.readyState==4 && this.status==200){
				alert(this.responseText);
			if(this.responseText=="sucess"){alert("success")

		}


			}
		}
		ajax.open("POST","agentupdate.php",true);
		ajax.send(formdata);
		document.getElementById("fom").reset();

	}


	
	
</script>
<script type="text/javascript">
	inser();
</script>