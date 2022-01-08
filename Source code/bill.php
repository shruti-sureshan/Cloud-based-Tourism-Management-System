<html>

<?php
mysql_connect("localhost","root","") or die(mysql_error());
$dbase_name="tourism";
mysql_select_db($dbase_name) or die(mysql_error());
$t=$_POST['t1'];
 $query=("select * from customer where cid='$t' ");
 $result=mysql_query($query);
     while($row = mysql_fetch_array($result))
	{   
	echo '<body bgcolor="#FEF9E7 ">';
	echo '<center><font face="Brush Script MT" size=8>Travel Agency</font></center>';
	echo "<center><font size=4>";
	echo "<br>User id:  " . $row['cid'] . "<br>First name:  " . $row['fname'] . "<br>Last name:  " . $row['lname'] . "<br>Middle name:  " . $row['mname']. "<br>Email:  " . $row['email'] . "<br>Address:  " . $row['add'] . "<br>Phone no:  " . $row['pno'] . "</td></tr>";  
echo "</font></center>";      

	}
 $query=("select * from destination order by did ");
 $result=mysql_query($query);
     while($row = mysql_fetch_array($result))
	{   
	echo '<body bgcolor="#FEF9E7 ">';
	echo '<center><font face="Brush Script MT" size=8>Travel Agency</font></center>';
	echo "<center><font size=4>";
	echo "<br>User id:  " . $row['cid'] . "<br>First name:  " . $row['fname'] . "<br>Last name:  " . $row['lname'] . "<br>Middle name:  " . $row['mname']. "<br>Email:  " . $row['email'] . "<br>Address:  " . $row['add'] . "<br>Phone no:  " . $row['pno'] . "</td></tr>";  
echo "</font></center>";      

	}




mysql_query($query) or die(mysql_error());


mysql_close();
?>
</body>
</html>






   