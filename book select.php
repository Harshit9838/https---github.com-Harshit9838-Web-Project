<?php 
session_start();
if(isset($_SESSION['name']))
{
$v1=$_GET['new'];
echo "<form method ='POST' action=''>".$v1. 
"<input type ='number' name='a'><br>
<input type = 'submit' value = 'save'></form>";
$val=$_POST['a'];
mysql_connect("localhost","root","");
mysql_select_db("project");
$query= mysql_query("UPDATE books SET copies= copies -1 WHERE name = '$v1' ");
echo "<a href ='logout2.php'>LOGOUT </a>";
}

?>