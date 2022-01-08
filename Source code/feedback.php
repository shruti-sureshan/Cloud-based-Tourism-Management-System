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
<script src="formvalidation.js"></script>
</head>
<body>
<?php
$t1=$_POST["t1"];
$t2=$_POST["q1"];
$t3=$_POST["q2"];
$t4=$_POST["q3"];
$t5=$_POST["q4"];

$con = mysqli_connect("database-1.clcpwbacofyr.ap-south-1.rds.amazonaws.com","admin","abcd23$","tourism") or die(mysqli_error());
$dbase_name="tourism";
mysqli_select_db($con, $dbase_name) or die (mysqli_error($con));
$query="insert into feedback values('$t1','$t2','$t3','$t4','$t5')";
mysqli_query($con, $query) or die (mysqli_error($con));
mysqli_close($con);
?>
<p>Feedback recorded successfully</p>
<center><img src="tick.png" alt=img width=400 height=400></center>
</body>
</html>
