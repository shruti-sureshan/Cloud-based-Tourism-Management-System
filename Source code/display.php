<html>

<?php
$con = mysqli_connect("database-1.clcpwbacofyr.ap-south-1.rds.amazonaws.com", "admin","abcd23$", "tourism") or die (mysqli_error());
$dbase_name="tourism";
mysqli_select_db($con, $dbase_name) or die(mysqli_error($con));
$t=$_POST['t1'];
 $query=("select * from customer where cid='$t' ");
 $result=mysqli_query($con, $query);
     while($row = mysqli_fetch_array($result))
	{   
	echo '<body bgcolor="#FEF9E7 ">';
	echo '<center><font face="Brush Script MT" size=8>Travel Agency</font></center>';
	echo "<center><font size=4>";
	echo "<br>User id:  " . $row['cid'] . "<br>First name:  " . $row['fname'] . "<br>Last name:  " . $row['lname'] . "<br>Middle name:  " . $row['mname']. "<br>Email:  " . $row['email'] . "<br>Address:  " . $row['address'] . "<br>Phone no:  " . $row['pno'] . "</td></tr>";  
echo "</font></center>";      

	}


mysqli_query($con, $query) or die(mysqli_error($con));


mysqli_close($con);
?>
</body>
</html>






   
