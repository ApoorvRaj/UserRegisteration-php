<html>
<body>
<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="mydb";
$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con)
{
	die('Connection failed'.mysqli_error());
}
mysqli_select_db($con,"mydb");
$sql="select * from mytb1 where firstname='$_POST[fname]'";
?>
<table width="50%" border=5 align="center">
<thead>
<tr>
	<th>first name</th>
	<th>last name</th>
	<th>password</th>
	<th>address</th>
	<th>email</th>
</tr>
</thead>
<tbody>
<?php
if($result=mysqli_query($con,$sql))
{
	while($row=mysqli_fetch_row($result))
	{?>
		<tr>
			<td><?php echo $row[0];?></td>
			<td><?php echo $row[1];?></td>
			<td><?php echo $row[2];?></td>
			<td><?php echo $row[3];?></td>
			<td><?php echo $row[4];?></td>
		</tr>	
	<?php
	}
}
mysqli_close($con);
?>
</tbody>
</table>
</body>
</html>