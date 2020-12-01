
<?php 
include 'smarthome.html';
$conn=mysqli_connect("localhost","root","","ehome");
?>
<div id="mainhome">
<div class="container"><br>
		<h3>Leased property</h3>
		<table  id="tab">
			<thead>
				<tr>
					<th>IDNo.</th>
					<th>Property name</th>
					<th> Category</th>
					<th> Sold To</th>
					<th>Time of purchase</th>
					<th>Amount paid</th>
					<th>Form of payment</th>
					<th>Status</th>
					<th>period</th>
					<th>Phone number</th>
					<th>Email</th>
				</tr>
			</thead>
			<tbody>
			<?php
			//SELECT * FROM `leavedetails`
$sel=mysqli_query($conn,"select * from purchase where status='withdraw'");
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
				<td><?php echo $row['period']; ?></td>
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
			background-color: #EEEEEE;
			margin-top: 30px;
			border:1px solid #00A475;
	        text-align: left;
			margin-left: 10%;
			width: 70%;
			
		}
		#tab th{
			background-color: #1C6EA4;
			color: white;
		}
		#tab tr{
			background-color: #DOE4F5;
		}
			#tab td{
			font-size: 19px;
		}
		h3{
		margin-left: 50%;
			font-size: 20px;
			color: blue;
			float: left;
		}
</style>
<script type="text/javascript">
	document.getElementById("mainhome").style.display="none";
	document.getElementById("ground").innerHTML=document.getElementById("mainhome").innerHTML;
</script>
