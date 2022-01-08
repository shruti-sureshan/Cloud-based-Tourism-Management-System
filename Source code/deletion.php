<html>
<head>
<style>
body{
background-color:#FEF9E7;
}
p{
text-align: center;
font-size:26px;
}

</style>
</head>
<body>
<?php
$con = mysqli_connect("database-1.clcpwbacofyr.ap-south-1.rds.amazonaws.com", "admin","abcd23$", "tourism") or die (mysqli_error());
$dbase_name="tourism";
mysqli_select_db($con, $dbase_name) or die(mysqli_error($con));
$t=$_POST['del'];
$query="delete from customer where cid=$t";
mysqli_query($con, $query) or die(mysqli_error($con));
mysqli_close($con);
?>
<p>Account deleted successfully</p>
<center><img src="tick.png" alt=img width=400 height=400></center>
</body>
</html>
