<!doctype html>
<html>
<head>
<style>
body {
background-image: url("icon.png");
background-color: #CCCCFF;
background-repeat: no-repeat;
background-position: 10% 10%;

}
table1{
margin:0 0 0 160px;
}

</style>
<title>
Sign up&nbsp|&nbspCalteta
</title>
</head>
<body><center>
<br />
<br />
<form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post"><center> 
<table><tr><td>
<b>First Name : </b></td>
<td>
<input type="text" name="fname" > </td>
</tr><tr></tr><tr></tr><tr></tr>
<tr><td>
<b>Last Name : </b></td>
<td>
<input type="text" name="lname"></td>
</tr><tr></tr><tr></tr><tr></tr>
<form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post"><center> 
<tr><td>Username : </td>
<td> <input type="text" name="username">&nbsp&nbsp&nbsp<input type="submit" value="Check"></td></tr>
</form><tr></tr><tr></tr><tr></tr>
<tr>
<td><b>Email id : </b></td>
<td>
<input type="text" name="mailid"></td>
</tr><tr></tr><tr></tr><tr></tr>
<tr><td>Password : </td>
<td>
<input type="password" name="pswd"></td>
</tr><tr></tr><tr></tr><tr></tr>
<tr><td>Confirm Password : </td><td>
<input type="password" name="pswd1"></td></tr><tr></tr><tr></tr><tr></tr>
<tr><td>Mobile No.</td>
<td>
<input type="number" name="mobno" max="9999999999"></td>
</tr><tr></tr><tr></tr><tr></tr>
<tr><td>Sex : </td>
<td>
<input type="radio" value="Male" name="sex" checked="checked"/>&nbsp Male
</td></tr><tr>
<td></td><td><input type="radio" value="female" name="sex">&nbsp Female
</td>
</tr><tr></tr><tr></tr><tr></tr>
<tr><td> Date of Birth : </td>
<td><input type="date" name="dob"></td>
</tr><tr></tr><tr></tr><tr></tr>
<tr><td> Address : </td>
<td> <textarea name="address" rows='4' cols='60' onfocus="if(this.value==this.defaultValue)this.value='';this.style.color='#333'"  {this.value=this.defaultValue;this.style.color='#CCC'}"></textarea>​
</td></tr><tr></tr><tr></tr><tr></tr>
<td> I am a </td><td>
<select name="work">
<option value="STUDENT">STUDENT</option>
<option value="TUTOR">TUTOR</option>

</select></td></tr><tr></tr><tr></tr><tr></tr>
</table>
<br /><table>
<tr><td>
<input type="submit" value="Get started" name="signup" >
</td><td></td><td>
<input type="reset" value="Reset"></td><td></td><td>
<input type="button" value="Cancel" onclick=location.href="login.php"></td></tr>

<?php 
$fname=$lname=$pswd=$emailid=$mobno=$sex=$DOB=$profession=$pswd1=$uname=$address="";



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "calteta";


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



if($_SERVER["REQUEST_METHOD"]=="POST")
{
$fname=enc($_POST["fname"]);
$lname=enc($_POST["lname"]);
$pswd=($_POST["pswd"]);
$emailid=enc($_POST["mailid"]);
$mobno=enc($_POST["mobno"]);
$sex=enc($_POST["sex"]);
$DOB=enc($_POST["dob"]);
$profession=enc($_POST["work"]);
$pswd1=($_POST["pswd1"]);
$uname=enc($_POST["username"]);
$address=enc($_POST["address"]);
$dp="uploads/default.png";
}

function enc($elem)
{
$elem=trim($elem);
$elem=stripslashes($elem);
$elem=htmlspecialchars($elem);
return $elem;
} 
$check1=mysqli_query($conn,"SELECT username FROM users WHERE username='$uname'");
$check2=mysqli_fetch_array($check1,MYSQLI_ASSOC);
$check3=$check2["username"];


if (!empty($pswd) AND !empty($pswd1) AND !empty($fname) AND !empty($emailid) AND !empty($mobno) AND !empty($DOB) AND empty($check3)) {
 if($pswd!=$pswd1)
{
  echo "Passwords do not match";
}   
else{$pswd2=sha1($pswd1);
$sql ="INSERT INTO users (first_name,last_name,username,password,dob,email_id,contact,gender,user_level,address,dp_url)  
VALUES ('$fname','$lname','$uname','$pswd2','$DOB','$emailid','$mobno','$sex','$profession','$address','$dp')";

$idque=mysqli_query($conn,"SELECT id FROM users WHERE username='$uname'");
$idarr=mysqli_fetch_array($idque,MYSQLI_ASSOC);
$id=$idarr["id"];

if ($conn->query($sql) === TRUE)
{
session_start();
$_SESSION["id"]=$id;
header("location:askquestion.php");
}
}
} 

elseif(empty($pswd) AND !empty($check3))
{
echo "<b><h3>Username already exists...!!!! Enter a different one.</h3></b>";
}
elseif(empty($pswd) OR empty($fname) OR empty($uname) OR empty($emailid) OR empty($mobno) OR empty($DOB) )
{
    echo "\nFill all the details";
}

$conn->close(); ?>






</table>
</center>
</form>
</body>
</html>
 
