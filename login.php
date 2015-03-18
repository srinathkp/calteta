<?php session_start();
if(isset($_SESSION["id"]))
{
header("location:askquestion.php");
}
?>
<!doctype html>
<html>
<head>

<style>
body {
background-image: url("icon.png");
background-color: #CCCCFF;
background-repeat: no-repeat;
background-position: 23% 10%;

}
table1{
margin:0 0 0 160px;
}
</style>
<title>
Log in &nbsp;|&nbsp;Calteta
</title>
</head>
<body>
<br />
<br /><br /><br />
<center><h3> 
<form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post"><table><tr><td>
<b>Username:</b></td>
<td>
<input type="text" name="id1" > </td>
</tr>
<tr><td>
<b>Password:</b></td>
<td>
<input type="password" name="password1"></td>
</tr>
</table>
<br /><table><tr>
<i>Remember Me</i>
<input type="checkbox" name="rem"></tr>
</table>
<br /><table1 value="table1" name="table1">         <tr><td>

<input type="submit" value="Log in" name="login" color="red"></td>&nbsp;&nbsp;&nbsp;<td>

<input type="reset" value="Reset" name="reset"></td>&nbsp;&nbsp;&nbsp;<td><a href="file:///C:/Users/Admin/Desktop/passreset.php">
<b><em>Forgot password.? </em></b></a></td>

</tr>
<br /><br />Don't have an account?<a href="sign_up.php">
<b><em>Sign up now </em></b></a>to discover amazing features

</tr>
</h3></center><br /><br /><br /><br /><br /><br /><br /><br />

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$myusername=$mypassword=$mypassword1="";

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="calteta"; // Database name 



$conn=new mysqli($host, $username, $password,$db_name);
if($conn->connect_error)
{
die("cannot connect"); }
 
$myusername=$_POST['id1']; 
$mypassword=$_POST['password1']; 


$myusername = stripslashes($myusername);
$mypassword1 = sha1($mypassword);



$sql="SELECT * FROM users WHERE username='$myusername' and password='$mypassword1'";
$count=0;

if($username!=NULL){$m=mysqli_query($conn,$sql) or die("error");
$count=mysqli_num_rows($m);}
if(!empty($myusername)){
if($count==1){
session_start();
$idque=mysqli_query($conn,"SELECT id FROM users WHERE username='$myusername'");
$idarr=mysqli_fetch_array($idque,MYSQLI_ASSOC);
$id=$idarr["id"];
$_SESSION["id"]=$id;
header("location:askquestion.php");
}
else {
echo "Wrong Username or Password";
}}

else
{
echo "<div style='text-align:center;color:red'><h3> Please Enter Your Username and Password!</h3></div>";

}}

?>
</table>
</form>

</body>
</html>
 
