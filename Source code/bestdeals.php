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
<script src="formvalidation2.js"></script>
</head>
<body>
<?php
$s1=(mt_rand(1,100));
$t2=$_POST["room"];
$t3=$_POST["r"];
$con = mysqli_connect("database-1.clcpwbacofyr.ap-south-1.rds.amazonaws.com","admin","abcd23$","tourism") or die(mysqli_error());

$dbase_name="tourism";
mysqli_select_db($con, $dbase_name) or die (mysqli_error($con));

$query="insert into package values('$s1','$t2','$t3')";
mysqli_query($con, $query) or die (mysqli_error($con));
mysqli_close($con);
?>
<p>Best deals selected successfully</p>
<center><img src="tick.png" alt=img width=400 height=400></center>
</body>
</html>
