
<?php 
include 'smarthome.html';
$conn=mysqli_connect("localhost","root","","ehome");
?>
<div id="mainhome">
<div class="container"><br>
		<input type="text" name="category" style="display: none"><br>
		<table  id="tab">
			<thead>
				<tr><th>ID No</th>
					<th>Property name</th>
					<th>category</th>
					<th> Sold To</th>
					<th>Time of purchase</th>
					<th>Amount paid</th>
					<th>Form of payment</th>
					<th>Status</th>
					<th>Agent</th>
					<th>Approve</th>
					<th>Reject</th>
				</tr>
			</thead>
			<tbody>
			<?php
$sel=mysqli_query($conn,"select * from purchase");
while($row=mysqli_fetch_assoc($sel)){
			?>
				<tr>
				<td><?php echo $row["id"]; ?></td>
				<td><?php echo $row["propertyname"]; ?></td>
				<td><?php echo $row['category']; ?></td>
			    <td><?php echo $row['username']; ?></td>
				<td><?php echo $row['times']; ?></td>
				<td><?php echo $row['price']; ?></td>
				<td><?php echo $row['form']; ?></td>
				<td><?php echo $row['status']; ?></td>
				
				<td><?php echo $row['agent']; ?></td>
			    <td><button id="btn" type="button" onclick="return approve(<?php echo $row['id']; ?>)";>approve</button></td>
			<td><button id="btn" type="button" onclick="return reject(<?php echo $row['id']; ?>)";>reject</button></td>
				</tr>
			
				<?php
}
				?>
	</tbody>
</table>
</div>
</div>
<style type="text/css">
		#tab{
			background-color: #efefef;
			margin-top: 10px;
			border:1px solid #00A475;
	        text-align: left;
			margin-left: 5%;
			width: 90%;
			height: 500px;
			display: block;
			overflow-y: scroll;
			
		}
		#tab th{
			background-color: #1C6EA4;
			color: white;
			font-size: 20px;
		}
		#tab tr{
			background-color: #DOE4F5;
		}
			#tab td{
			font-size: 19px;
		}
			#tab tr:hover{
		background-color: pink;
		}
			#tab tr:nth-child(even){
		background-color: #efefef;
		}
		h3{
			margin-left: 40%;
		}
			#btn{
			size: 10px;
			font-size: 15px;
			float: left;
			height: 30px;
			width: 80%;
		}
</style>
<script type="text/javascript">
	document.getElementById("mainhome").style.display="none";
	document.getElementById("ground").innerHTML=document.getElementById("mainhome").innerHTML;
	function approve(s,r){
		alert(s)
		var p=confirm("proceed to approve")
		if(p){
			var ajax=new XMLHttpRequest();
			ajax.onreadystatechange=function(){
			
				if(this.readystate==4 && this.status==200){
					alert(this.responseText);
					if(this.responseText="success"){
						alert("sucessfully approved")
					}
				}
			}
			ajax.open("POST","approve.php",true);
			ajax.setRequestHeader("content-type","application/x-www-form-urlencoded");
			ajax.send("s="+s);
		}
	}
	function reject(s){
		var p=confirm("are you sure");
		if(p){
			var ajax=new XMLHttpRequest();
			ajax.onreadystatechange=function(){
				if(this.readyState==4 && this.status==200){
					alert("withdrawing....")
					if(this.responseText=="success"){

					}
				}
			}
			ajax.open("POST","reject.php",true);
			ajax.setRequestHeader("content-type","application/x-www-form-urlencoded");
			ajax.send("s="+s);
		}
	}
</script>
<td><?php echo $row['period']; ?></td>