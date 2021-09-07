<?php

session_start();
$s=$_POST['a'];
$t=$_POST['b'];

$_SESSION['name']=$s;
$_SESSION['pswd']=$t;

mysql_connect("localhost","root","");
mysql_select_db("project");

$query="SELECT * FROM student WHERE name='$s' AND password ='$t'";
$result=mysql_query($query);
$row=mysql_num_rows($result);
if(name ==""|| pswd ==""){
	echo "Please fill all the details..";
	echo "<a href='admin.php'>Try Again</a>";	
}
else 
	{
	echo "<table border='6' width='75%'>";
	echo "<tr height='5px'>";
	echo "<td width='20%'>Name</td>";
	echo "<td width='20%'>Copies</td>";
	echo "<td width='20%'>Department</td>";
	echo "</tr>";
	echo "</table>";
	}
	$result1 = mysql_query("SELECT * FROM books");
	while ($row3 =mysql_fetch_assoc($result1)){ 
        echo "<table border='6' width='75%'>";
		echo "<tr height='5px'>";
		echo "<td width='20%'>$row3[name]</td>";
		echo "<td width='20%'>$row3[copies]<a href='book select.php?new=$row3[name]'>SELECT COPIES</a></td>";
		echo "<td width='20%'>$row3[department]</td>";
		echo "</tr>";
		echo "</table>";
		}
	echo "<a href='logout2.php'>LOGOUT</a>";
?>