<?php 
$m = $_POST['a'];
$n = $_POST['b'];
$o = $_POST['c'];
if($m==""||$n==""||$o=="")
{
echo "please fill the details";
header('location:student login.php'); 
}
else 
{
mysql_connect("localhost","root","");
mysql_select_db("project");
$query = "SELECT * FROM student WHERE name = '$m' AND password = '$n'";
$result = mysql_query($query);
$row = mysql_num_rows($result);
if($row==0)
{
$query1 = "INSERT INTO student VALUES ('$m','$n','$o',0)";
mysql_query($query1);
echo "database Enter";
}
else 
{
$result2=mysql_query("SELECT confirmation FROM student WHERE name = '$m' AND password = '$n'");
$row1=mysql_fetch_array($result2);
if($row1[0]==1)
{
echo "Confrimed !!! ";
}
else
{
echo "not confrimed<br>";
echo "<a href ='student c.php'>Click here to login</a><br>";

}
}
}
echo "<a href = 'logout2.php'>LOGOUT</a>";
?>