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
$t=$_POST['t1'];
$newpassword=$_POST['t8'];
$query= "update customer set pwd='$newpassword' where cid='$t' ";
mysqli_query($con, $query) or die(mysqli_error($con));
mysqli_close($con);
?>
<p>Account updated successfully</p>
<center><img src="tick.png" alt=img width=400 height=400></center>
</body>
</html>
