<html>
<body>
<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="mydb";
$con = mysqli_connect($servername,$username,$password,$dbname);
if(!$con)
{
die('connection failed : '.mysqli_error());
}
$sql="INSERT INTO mytb1(firstname,lastname,password,address,email)VALUES('$_POST[fname]','$_POST[lname]','$_POST[pass]','$_POST[add]','$_POST[email]')";
if(!mysqli_query($con,$sql))
{
	die('no record added : '.mysqli_error());
}
echo "1 record added";
mysqli_close($con);
?>
</body>
</html>