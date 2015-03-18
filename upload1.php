<?php session_start();
if(!isset($_SESSION["id"]))
{
header("location:login.php");
} ?>
<!doctype html>
<html>
<body>
<?php  

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "calteta";
$fname1=$_SESSION["id"];

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connections
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

if(isset($_POST["submit"])) {
    if($_FILES["fileToUpload"]["tmp_name"]=="")
{

header("location:askquestion.php");
}
    }

// Check file size
if ($_FILES["fileToUpload"]["size"] > 2000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}



$name=$_SESSION["id"];
$a=0;
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";header( "refresh:3;url=askquestion.php" );

// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
$sql1="INSERT INTO questions (attachment_url,asked_by) VALUES('$target_file','$name')";
$sql2="INSERT INTO questions_status (current_status) VALUES ('$a')";
if ($conn->query($sql1) === TRUE AND $conn->query($sql2)===TRUE )
{
header("location:askquestion.php");
   }else{
   echo "TRY AGAIN Later";header( "refresh:3;url=askquestion.php" );

   } }else {
        echo "Sorry, there was an error uploading your file.";header( "refresh:3;url=askquestion.php" );

    }}
$conn->close(); 
  ?>
  
  
  </body>
      </html>