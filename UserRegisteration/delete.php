<html>
<head>
</head>
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
mysqli_select_db($con,"mydb");
$name=$_POST['fname'];
$sql="delete from mytb1 where firstname ='$_POST[fname]'";
if(!mysqli_query($con,$sql))
{
	die('no record deleted : '.mysqli_error());
}
else
echo "1 record deleted";
mysqli_close($con);
?>
</body>
</html>