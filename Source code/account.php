</body>
</html>
<?php

$con = mysqli_connect("database-1.clcpwbacofyr.ap-south-1.rds.amazonaws.com","admin","abcd23$","tourism") or die(mysqli_error($con));
$db="tourism";
mysqli_select_db($con, $db) or die (mysqli_error($con));
$t2=$_POST['t2'];
$t8=$_POST['t8'];

$q="select fname,pwd from customer where fname='$t2' and pwd='$t8' ";

$no_of_rows=mysqli_num_rows(mysqli_query($con, $q));
#echo $no_of_rows;
if($no_of_rows==0){
	echo '<script language= "javascript">';
	echo 'alert("Incorrect Username or Password")';
	echo '</script>';
	echo '<a href="account.html">Enter correct username or password</a>';
	
}
else{
	echo '<script language= "javascript">';
	echo 'alert("Successfully Logged in!")';
	echo '</script>';
}
echo '<script>window.location="package.html"</script>';
?>
</body>
</html>
