 function signup(){
document.getElementById("ground").innerHTML="";
window.location.replace("aregistrationpage.php");
}
function logout(){
window.location.replace("index.php");
}
function hello(){
	alert("hello");
}
function signin(){
	document.getElementById("ground").innerHTML="";
	window.location.replace("aloginpage.php");
}
   	function fun(){
   		var name=document.getElementById("username").value;
        var pass=document.getElementById("password").value;
        var val1=document.getElementById("uname");
        var val2=document.getElementById("psname");
        if (name.length <= 0) {
	val1.innerHTML="missing fields required";
	val1.style.color="red";
	return true;
}
if (pass.length <= 0) {
	val2.innerHTML="missing fields required";
	val2.style.color="red";
	return true;
   	}else{
	var ajax=new XMLHttpRequest();
	ajax.onreadystatechange=function(){
		if (this.readyState==4 && this.status==200) {
			if (this.responseText="exist") {
				window.location.replace("Homepage.php");
		}else{}
	}
}
}
ajax.open("POST","adminlogin.php",true);
ajax.setRequestHeader("content-type","application|x-www-form-urlencoded");
ajax.send("username="+username);
   	}
function logg(){
var name=document.getElementById("username").value;
var email=document.getElementById("email").value;
var phone=document.getElementById("phone").value;
var pass=document.getElementById("password").value;
var cpass=document.getElementById("cpassword").value;
var val1=document.getElementById("uname");
var val2=document.getElementById("ename");
var val3=document.getElementById("pname");
var val4=document.getElementById("psname");
var val5=document.getElementById("cpsname");
if (name.length <= 0) {
	val1.innerHTML="missing fields required";
	val1.style.color="blue";
	return true;
}
 if (email.length <= 0) {
		val2.innerHTML="missing fields required";
	val2.style.color="blue";
	return false;
}
 if (phone.length <= 0) {
		val3.innerHTML="empty fields must be filled";
	val3.style.color="blue";
	return false;
}
 if (pass.length <= 0) {
		val4.innerHTML="missing fields required";
	val4.style.color="blue";
	return false;
}
 if (cpass.length <= 0) {
		val4.innerHTML="empty fields must be filled";
	val4.style.color="blue";
	return false;
}else{
	var ajax=new XMLHttpRequest();
	var fom=document.getElementById("forme");
		var formdata=new FormData(fom);
		formdata.append("username",name);
		formdata.append("email",email);
		formdata.append("phone",phone);
		formdata.append("password",pass);
		formdata.append("cpassword",cpass);
		ajax.onreadystatechange=function(){
	if (this.readyState==4 && this.status==200) {
if (this.responseText=="registration success") {
	window.location.href="adminlog.php";
	
}
else{
	alert(this.responseText);
}

	}
}
ajax.open("POST","admin.php",true);
		ajax.send(formdata);
}
}
function agent(){
	     var name=document.getElementById("ownername").value;
        var photo=document.getElementById("ima").value;
        var prop=document.getElementById("property").value;
        var phone=document.getElementById("phoneno").value;
        var email=document.getElementById("email").value;
         var idno=document.getElementById("idno").value;
          var add=document.getElementById("address").value;
         var res=document.getElementById("residence").value;
        var val1=document.getElementById("rname");
        var val2=document.getElementById("lname");
if (name.length <= 0) {
	val1.innerHTML="missing fields required";
	val1.style.color="blue";
	return true;
}
 if (email.length <= 0) {
		val2.innerHTML="missing fields required";
	val2.style.color="blue";
	return false;
}
 if (phone.length <= 0) {
		val3.innerHTML="empty fields must be filled";
	val3.style.color="blue";
	return false;
}else{
	var ajax=new XMLHttpRequest();
	var fom=document.getElementById("form");
		var formdata=new FormData(fom);
		formdata.append("ownername",name);
		formdata.append("property",prop);
		formdata.append("email",email);
		formdata.append("phoneno",phone);
		formdata.append("image",photo);
	    formdata.append("idno",idno);
	    formdata.append("address",add);
	    formdata.append("residence",res);
		ajax.onreadystatechange=function(){
	if (this.readyState==4 && this.status==200) {
if (this.responseText=="success") {}
else{}
	}
}
ajax.open("POST","agentdetail.php",true);
		ajax.send(formdata);
fom.reset();
}
}
function newproperty(){
        var title=document.getElementById("title").value;
        var name=document.getElementById("rental").value;
        var desc=document.getElementById("description").value;
        var photo=document.getElementById("photo").files[0];
        var loc=document.getElementById("location").value;
        var addr=document.getElementById("address").value;
         var buy=document.getElementById("buyprice").value;
          var rent=document.getElementById("rentprice").value;
         var room=document.getElementById("rooms").value;
          var bed=document.getElementById("bedrooms").value;
        var bath=document.getElementById("bathrooms").value;
        var cou=document.getElementById("county").value;
        var city=document.getElementById("city").value;
        var icon=document.getElementById("prof").value;
        var clas=document.getElementById("category").value;
        var period=document.getElementById("period").value;
        var val1=document.getElementById("rname");
        var val2=document.getElementById("lname");
if (name.length <= 0) {
	val1.innerHTML="missing fields required";
	val1.style.color="blue";
	return true;
}
 if (addr.length <= 0) {
		val2.innerHTML="missing fields required";
	val2.style.color="blue";
	return false;
}
 if (title.length <= 0) {
		val3.innerHTML="empty fields must be filled";
	val3.style.color="blue";
	return false;
}else{
	var ajax=new XMLHttpRequest();
	var fom=document.getElementById("form");
		var formdata=new FormData(fom);
		formdata.append("title",title);
		formdata.append("rental",name);
		formdata.append("description",desc);
		formdata.append("buyprice",buy);
		formdata.append("rentprice",rent);
		formdata.append("rooms",room);
		formdata.append("bathrooms",bath);
		formdata.append("location",loc);
		formdata.append("address",addr);
		formdata.append("county",cou);
		formdata.append("city",city);
		formdata.append("files[]",photo);
		formdata.append("prof",icon);
		formdata.append("category",clas);
		formdata.append("period",period);
	
		ajax.onreadystatechange=function(){
	if (this.readyState==4 && this.status==200) {
		//alert(this.responseText);
if (this.responseText=="success") {}
else{}
	}
}
ajax.open("POST","newhome.php",true);
		ajax.send(formdata);
		fom.reset();
}
}
function search(){
	alert("searching");
	var name=document.getElementById("loca").value;
   		    var ajax=new XMLHttpRequest();
   			ajax.onreadystatechange=function(){
		if (this.readyState==4 && this.status==200) {
			alert(this.responseText);
			var res=JSON.parse(this.responseText);
			
				var table=document.createElement("table");
				table.setAttribute("id","table");
				for(var i = 0;i<1;i++){
				var row=document.createElement("tr");
				var td=document.createElement("td");
				td.innerText="rentalname";
				row.appendChild(td);
				//table.appendChild(row);
				var td=document.createElement("td");
				td.innerText="location";
				row.appendChild(td);
				//table.appendChild(row);
				var td=document.createElement("td");
				td.innerText="address";
				row.appendChild(td);
				//table.appendChild(row);
				var td=document.createElement("td");
				td.innerText="block";
				row.appendChild(td);
				//table.appendChild(row);
				var td=document.createElement("td");
				td.innerText="rooms";
				row.appendChild(td);
				//table.appendChild(row);
				var td=document.createElement("td");
				td.innerText="rentallgallery";
				row.appendChild(td);
				//table.appendChild(row);
				var td=document.createElement("td");
				td.innerText="Admin";
				row.appendChild(td);
				//table.appendChild(row);
				var td=document.createElement("td");
				td.innerText="Position";
				//row.appendChild(td);
				table.appendChild(row);
				var td=document.createElement("td");
				td.innerText="email";
				row.appendChild(td);
				//table.appendChild(row);
				var td=document.createElement("td");
				td.innerText="View more";
				row.appendChild(td);
				}
				for (var i = 0; i < res.length; i++) {
					var tr=document.createElement("tr");
					var td1=document.createElement("td");
					td1.innerText=res[i].rentalname;
					tr.appendChild(td1);
					table.appendChild(tr);
					var td1=document.createElement("td");
					td1.innerText=res[i].location;
					tr.appendChild(td1);
					table.appendChild(tr);
					var td1=document.createElement("td");
					td1.innerText=res[i].address;
					tr.appendChild(td1);
					table.appendChild(tr);
					var td1=document.createElement("td");
					td1.innerText=res[i].block;
					tr.appendChild(td1);
					table.appendChild(tr);
					var td1=document.createElement("td");
					td1.innerText=res[i].rooms;
					tr.appendChild(td1);
					table.appendChild(tr);
					var td1=document.createElement("td");
					td1.innerText=res[i].image;
					tr.appendChild(td1);
					table.appendChild(tr);
					var td1=document.createElement("td");
					td1.innerText=res[i].ownername;
					tr.appendChild(td1);
					table.appendChild(tr);
					var td1=document.createElement("td");
					td1.innerText=res[i].position;
					tr.appendChild(td1);
					table.appendChild(tr);
					var td1=document.createElement("td");
					td1.innerText=res[i].email;
					tr.appendChild(td1);
					table.appendChild(tr);
					var td2=document.createElement("td");
					td2.setAttribute("onclick","return view(this);");
					var but=document.createElement("button");
					but.innerText="view";
					but.style.color="blue";
					td2.appendChild(but);
					tr.appendChild(td2);
					table.appendChild(tr);
					var td3=document.createElement("td");
					td3.setAttribute("onclick","return del("+res[i].id+");");
					var but=document.createElement("button");
					but.innerText="delete";
					but.style.color="blue";
					td3.appendChild(but);
					tr.appendChild(td3);
					table.appendChild(tr);

				}

				document.getElementById("list").appendChild(table)

		}
		
	   }
	   ajax.open("POST","searchhome.php",true);
	   ajax.setRequestHeader("content-type","application/x-www-form-urlencoded");
       ajax.send("location="+name);
}
function searching(){
	alert("searching");
	var name=document.getElementById("rentalname").value;
   		    var ajax=new XMLHttpRequest();
   		    alert(name);
   			ajax.onreadystatechange=function(){
		if (this.readyState==4 && this.status==200) {
			alert(this.responseText);
			var res=JSON.parse(this.responseText);
		
				var table=document.createElement("table");
				table.setAttribute("id","tab1");
				var ro=document.createElement("tr");
				var td=document.createElement("td");
				td.innerText="rentalname";
				ro.appendChild(td);
				//table.appendChild(row);
				var td1=document.createElement("td");
				td1.innerText="location";
				ro.appendChild(td1);
				//table.appendChild(row);
				var td2=document.createElement("td");
				td2.innerText="address";
				ro.appendChild(td2);
				//table.appendChild(row);
				var td3=document.createElement("td");
				td3.innerText="block";
				ro.appendChild(td3);
				//table.appendChild(row);
				var td4=document.createElement("td");
				td4.innerText="rooms";
				ro.appendChild(td4);
				//table.appendChild(row);
				var td5=document.createElement("td");
				td5.innerText="rentallgallery";
				ro.appendChild(td5);
				//table.appendChild(row);
				var td6=document.createElement("td");
				td6.innerText="ownername";
				ro.appendChild(td6);
				//table.appendChild(row);
				var td7=document.createElement("td");
				td7.innerText="email";
				ro.appendChild(td7);
				//table.appendChild(row);
				var td8=document.createElement("td");
				td8.innerText="View more";
				ro.appendChild(td8);
				//table.appendChild(row);
				var td9=document.createElement("td");
				td9.innerText="delete";
				ro.appendChild(td9);
				table.appendChild(ro);
				for (var i = 0; i < res.length; i++) {
					var tr=document.createElement("tr");
					var td11=document.createElement("td");
					td11.innerText=res[i].rentalname;
					tr.appendChild(td11);
					table.appendChild(tr);
					var td12=document.createElement("td");
					td12.innerText=res[i].location;
					tr.appendChild(td12);
					table.appendChild(tr);
					var td13=document.createElement("td");
					td13.innerText=res[i].address;
					tr.appendChild(td13);
					table.appendChild(tr);
					var td14=document.createElement("td");
					td14.innerText=res[i].block;
					tr.appendChild(td14);
					table.appendChild(tr);
					var td15=document.createElement("td");
					td15.innerText=res[i].rooms;
					tr.appendChild(td15);
					table.appendChild(tr);
					var td16=document.createElement("td");
					td16.innerText=res[i].image;
					tr.appendChild(td16);
					table.appendChild(tr);
					var td17=document.createElement("td");
					td17.innerText=res[i].ownername;
					tr.appendChild(td17);
					table.appendChild(tr);
					var td18=document.createElement("td");
					td18.innerText=res[i].email;
					tr.appendChild(td18);
					table.appendChild(tr);
					var td2=document.createElement("td");
					td2.setAttribute("onclick","return rise(this);");
					var but=document.createElement("button");
					but.innerText="view";
					but.style.color="blue";
					td2.appendChild(but);
					tr.appendChild(td2);
					table.appendChild(tr);
					var td3=document.createElement("td");
					td3.setAttribute("onclick","return decline(this);");
					var but=document.createElement("button");
					but.innerText="delete";
					but.style.color="blue";
					td3.appendChild(but);
					tr.appendChild(td3);
					table.appendChild(tr);

					
				}

				document.getElementById("list").appendChild(table)

		}
		
	   }
	   ajax.open("POST","indivhome.php",true);
	   ajax.setRequestHeader("content-type","application/x-www-form-urlencoded");
       ajax.send("rentalname="+name);
}
function del(s,d){
	//var td=document.getElementById("table");
	//var no=d.parentElement.parentElement.rowIndex;
	//alert(no);
var p=confirm("Are you sure you want to delete item");
if (p) {
   		    var ajax=new XMLHttpRequest();
   			ajax.onreadystatechange=function(){
		if (this.readyState==4 && this.status==200) {
			if (responseText=="success") {

			}
		
	   }	   
}
ajax.open("POST","delete.php",true);
	   ajax.setRequestHeader("content-type","application/x-www-form-urlencoded");
       ajax.send("s="+s);
}
	
}
function approve(s){
	alert(s)
}
		