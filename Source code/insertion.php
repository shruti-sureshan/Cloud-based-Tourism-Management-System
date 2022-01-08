<html>
<head>
<script src="formvalidation.js"></script>
</head>
<body>
<?php
$t1=(mt_rand(1,100));
$t2=$_POST["t2"];
$t3=$_POST["t3"];
$t4=$_POST["t4"];
$t5=$_POST["t5"];
$t6=$_POST["t6"];
$t7=$_POST["t7"];
$t8=$_POST["t8"];

$con = mysqli_connect("database-1.clcpwbacofyr.ap-south-1.rds.amazonaws.com", "admin","abcd23$", "tourism") or die (mysqli_error());
$dbase_name="tourism";
mysqli_select_db($con, $dbase_name) or die (mysqli_error($con));
$query="insert into customer values('$t1','$t2','$t3','$t4','$t5','$t6','$t7','$t8')";
mysqli_query($con, $query) or die (mysqli_error($con));
echo '<script language= "javascript">';
	echo 'alert("Account created successfully")';
	echo '</script>';
echo '<script>window.location="index.php"</script>';

mysqli_close($con);
?>
</body>
</html>


