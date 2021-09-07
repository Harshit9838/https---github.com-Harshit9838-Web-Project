<?php

session_start();
$m=$_POST['a'];
$o=$_POST['b'];

$_SESSION['name']=$m;
$_SESSION['pswd']=$o;

mysql_connect("localhost","root","");
mysql_select_db("project");

$query="SELECT * FROM admin WHERE name='$m' AND password ='$o'";
$result=mysql_query($query);
$row=mysql_num_rows($result);
if(name ==""|| pswd ==""){
	echo "Please fill all the details..";
	echo "<a href='admin.php'>Try Again</a>";	
}
else 
{
$query2="SELECT * FROM student";
	$result2=mysql_query($query2);
	
	echo "<table border='6' width='75%'>";
	echo "<tr height='5px'>";
	echo "<td width='20%'>Name</td>";
	echo "<td width='20%'>Email</td>";
	echo "<td width='20%'>Department</td>";
	echo "<td width='20%'>Confirmation</td>";
	echo "</tr>";
	echo "</table>";
	
	while($row2=mysql_fetch_array($result2)){
	echo "<table border='6' width='75%'>";
	echo "<tr height='5px'>";
	echo "<td width='20%'>".$row2[0]."</td>";
	echo "<td width='20%'>".$row2[1]."</td>";
	echo "<td width='20%'>".$row2[2]."</td>";
	echo "<td width='20%'>".$row2[3]."<a href='admin update.php?new=$row2[0]'>UPDATE</a></td>";
	echo "</tr>";
	echo "</table>";
	}
	echo "<a href='logout.php'>LOGOUT</a>";
}
?>