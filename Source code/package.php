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
$t1=(mt_rand(1,100));
$t2=$_POST["source"];
$t3=$_POST["destination"];
$t4=$_POST["depart"];
$t5=$_POST["return"];
$t6=$_POST["r"];
$t7=$_POST["person"];
$t8=$_POST["tot_amount"];
$con = mysqli_connect("database-1.clcpwbacofyr.ap-south-1.rds.amazonaws.com","admin","abcd23$","tourism") or die(mysqli_error());
$dbase_name="tourism";
mysqli_select_db($con, $dbase_name) or die (mysqli_error($con));
$query="insert into destination values('$t1','$t2','$t3','$t4','$t5','$t6','$t7','$t8')";
mysqli_query($con, $query) or die (mysqli_error($con));
mysqli_close($con);
?>
<p>Package recorded successfully</p>
<center><img src="tick.png" alt=img width=400 height=400></center>
</body>
</html>
