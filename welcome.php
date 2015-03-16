<?php 
session_start();
if(!isset($_SESSION["id"]))
{
 header("location:login.php");
}
else
{ 
echo "<div style='text-align:center'><h2>Welcome to calteta.com</h2></div>";
}

?>
<!DOCTYPE html>
<html>
<body>
<?php 
 $i=0;
 while($i<100)
{
 echo "&nbsp&nbsp&nbsp";
$i++;
} 

?>
<input type="button" value="log out" onclick=location.href="logout.php">
</body>
</html>