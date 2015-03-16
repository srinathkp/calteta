<!doctype html>
<html>
<head>
<style>
body {
background-image: url("icon.png");
background-color: #CCCCFF;
background-repeat: no-repeat;
background-position: 20% 10%;

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
</tr>
<tr><td>
<b>Last Name : </b></td>
<td>
<input type="text" name="lname"></td>
</tr>
<tr>
<td><b>Email id : </b></td>
<td>
<input type="text" name="mailid"></td>
</tr>
<tr><td>Password : </td>
<td>
<input type="password" name="pswd"></td>
</tr>
<tr><td>Confirm Password : </td><td>
<input type="password" name="pswd1"></td></tr>
<tr><td>Mobile No.</td>
<td>
<input type="tel" name="mobno" maxlength="10"></td>
</tr>
<tr><td>Sex : </td>
<td>
<input type="radio" value="Male" name="sex" checked="checked"/>&nbsp Male
</td></tr><tr>
<td></td><td><input type="radio" value="female" name="sex">&nbsp Female
</td>
</tr>
<tr><td> Date of Birth : </td>
<td><input type="date" name="dob"></td>
</tr>

<td> I am a </td><td>
<select name="prof">
<option value="stud1">School student</option>
<option value="Engineer">Engineer</option>
<option value="stud2">College student</option>
<option value="other">Other </option>
</select></td></tr>
</table>
<br /><table>
<tr><td>
<input type="submit" value="Get started" name="signup" >
</td><td></td><td>
<input type="reset" value="Reset"></td><td></td><td>
<a href="file:///C:/Users/Admin/Desktop/login.html"><input type="button" value="Cancel" onclick=location.href="login.php"></a></td></tr>

<?php 
$fname=$lname=$pswd=$emailid=$mobno=$sex=$DOB=$profession=$pswd1="";



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "id";


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
$profession=enc($_POST["prof"]);
$pswd1=($_POST["pswd1"]);
}

function enc($elem)
{
$elem=trim($elem);
$elem=stripslashes($elem);
$elem=htmlspecialchars($elem);
return $elem;
} 


if (!empty($pswd) AND !empty($pswd1) AND !empty($fname) AND !empty($emailid) AND !empty($mobno) AND !empty($DOB) ) {
 if($pswd!=$pswd1)
{
  echo "Passwords do not match";
}   
else{$pswd2=sha1($pswd1);
$sql ="INSERT INTO idpwd (username,Last_name,Password,DOB,Email_id,Mobile_no,Sex,Profession)  
VALUES ('$fname','$lname','$pswd2','$DOB','$emailid','$mobno','$sex','$profession')";

if ($conn->query($sql) === TRUE)
{
session_start();
$_SESSION["id"]=$fname;
header("location:welcome.php");
}
}
} 

elseif(empty($pswd) AND empty($fname) AND empty($emailid) AND empty($mobno) AND empty($DOB) )
{
    echo "\nFill all the details";
}

$conn->close(); ?>






</table>
</center>
</form>
</body>
</html>
 
