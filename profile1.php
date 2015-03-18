<?php session_start();
if(!isset($_SESSION["id"]))
{
header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Your Profile</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="aboutus.php">
                    <i class="fa fa-play-circle"></i>  About Us
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="askquestion.php">Ask a Question</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#profile">Edit Profile</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Calteta</h1>
                        <p class="intro-text">Your Problems.Our passion.</p>
						<p><i>Edit Your Profile here</i></p>
                        <a href="#profile" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
<?php 

$fname=$lname=$pswd=$emailid=$mobno=$sex=$DOB=$profession=$pswd1=$pswd2="";



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "calteta";
$fname1=$_SESSION["id"];

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql=mysqli_query($conn,"SELECT * FROM users
WHERE id='$fname1'");
$lnam=mysqli_fetch_array($sql,MYSQLI_ASSOC);
$lname=$lnam["last_name"];
?>

    <!-- About Section -->
    <section id="profile" class="container content-section text-center" onfocus="if(this.value==this.defaultValue)this.value='';this.style.color='#333'"  {this.value=this.defaultValue;this.style.color='#CCC'}">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Edit Profile</h2>
                <img src="<?php if(!empty($lnam["dp"])){echo $lnam["dp"];}
                   else {echo "uploads/default.png";}?>" width=25% ></center>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <?php $i=0;while($i<19){ echo "&nbsp&nbsp&nbsp";$i=$i+1;} ?> Select image:
    <input type="file" name="fileToUpload" id="fileToUpload">
    	<table> <tr>         <?php $i=0;while($i<7){ echo "<td></td>";$i=$i+1;} ?> 
<td><input type="submit" value="Upload Image" name="submit">
<input type="button" value="No image" name="default" onclick="window.location.href='noimg.php'" ></td></tr></table>
   	</form>

	<form action="profile1.php" method="post"><center> 
<table>

<tr><td>
<b>First Name : </b></td>
<td>
<input type="text" name="fname" value="<?php echo $lnam["first_name"] ?>"> </td>
</tr>
<tr><td>
<b>Last Name : </b></td>
<td>
<input type="text" name="lname" value="<?php echo $lname;?>"></td>
</tr>
<tr>
<td><b>Email id : </b></td>
<td>
<input type="text" name="mailid" value="<?php echo $lnam["email_id"]; ?>"></td>
</tr>
<tr><td>Password<i style="color:red">*</i> :</td>
<td>
<input type="password" name="pswd"></td>
</tr>

<tr><td>New Password : </td><td>
<input type="password" name="pswd1"></td></tr>
<tr><td>Confirm Password : </td><td>
<input type="password" name="pswd2"></td></tr>
<tr><td>Mobile No.</td>
<td>
<input type="tel" name="mobno" maxlength="10"  value="<?php echo $lnam["contact"]; ?>"></td>
</tr>
<tr><td>Sex : </td>
<td>

<input type="radio" value="Male" name="sex" checked="<?php if( $lnam["gender"]=="Male") echo "checked" ?>" > &nbsp Male
</td></tr><tr>
<td></td><td><input type="radio" value="female" name="sex">&nbsp Female
</td>
</tr>    

<tr><td> Date of Birth : </td>
<td><input type="date" name="dob" value="<?php echo $lnam["dob"] ?>" ></td>
</tr>

<td> I am a/an </td><td>
<select name="prof">
<option value="STUDENT" <?php if($lnam["user_level"]=="STUDENT") { echo "selected";}  ?>>Engineer</option>
<option value="TUTOR" <?php if($lnam["user_level"]=="TUTOR") { echo "selected";}  ?>>School student</option>
</select></td></tr>
</table>
<br /><table >
<tr><td>
<input type="submit" style="margin-left:150px;" value="Save" name="Save" >
</td><td>
<input type="button" value="Cancel" style="margin-left:-300px;" onclick=location.href="login.php"></td></tr>


</div> </div>
		
    </section>



    <?php 
	$nam=$_SESSION["id"];
	 
	?>
    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; Calteta 2015</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    
    <script src="js/grayscale.js"></script>


<?php


if($_SERVER["REQUEST_METHOD"]=="POST")
{
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
function enc($elem)
{
$elem=trim($elem);
$elem=stripslashes($elem);
$elem=htmlspecialchars($elem);
return $elem;
} 

$fname=enc($_POST["fname"]);
$lname=enc($_POST["lname"]);
$pswd=($_POST["pswd"]);
$emailid=enc($_POST["mailid"]);
$mobno=enc($_POST["mobno"]);
$sex=enc($_POST["sex"]);
$DOB=enc($_POST["dob"]);
$profession=enc($_POST["prof"]);
$pswd1=($_POST["pswd1"]);

$pswd2=($_POST["pswd2"]);


 if(sha1($pswd)!=$lnam["Password"])
{
  echo "Passwords do not match";
}   
else if( !empty($pswd1) AND $pswd1==$pswd2 )
{
 $pswd3=sha1($pswd1);
 $sql1 ="UPDATE users SET first_name='$fname',last_name='$lname',password='$pswd3',dob='$DOB',email_id='$emailid',contact='$mobno',gender='$sex',user_level='$profession'
  WHERE id='$fname1'"; 
 
 if ($conn->query($sql1) === TRUE)
{

$_SESSION["id"]=$fname;
echo "Profile updated";
}

}
else if(!empty($pswd1) AND $pswd1!=!$pswd2)
{
echo "New password mismatch error";
}
else{
$sql1 ="UPDATE idpwd SET username='$fname',Last_name='$lname',DOB='$DOB',Email_id='$emailid',Mobile_no='$mobno',Sex='$sex',Profession='$profession'
  WHERE username='$fname1'"; 
 
 if ($conn->query($sql1) === TRUE)
{

$_SESSION["id"]=$fname;
echo "Profile updated";
echo ("<script>location.href = 'profile.php';</script>");

}

}


}



$conn->close(); ?>




</body>

</html>
