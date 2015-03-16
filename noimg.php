<?php session_start();
if(!isset($_SESSION["id"]))
{
header("location:login.php");
} 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "id";
$fname1=$_SESSION["id"];

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql=mysqli_query($conn,"SELECT * FROM idpwd
WHERE username='$fname1'");
$lnam=mysqli_fetch_array($sql,MYSQLI_ASSOC);
$def="uploads/default.png";
$sql="UPDATE idpwd SET dp='$def' WHERE username='$fname1'";
if($conn->query($sql)===TRUE)
{
header("location:profile.php");
}
echo "Error deleting the display pic . Try again later .. ";
header("refresh:2;url=profile.php");
?>