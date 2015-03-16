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
$dbname = "id";
$fname1=$_SESSION["id"];

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
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
header("location:profile.php");
}
$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
//if (file_exists($target_file)) {
   // echo "Sorry, file already exists.";
   // $uploadOk = 0;
//}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 2000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG"
&& $imageFileType != "GIF" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";header( "refresh:3;url=profile.php" );

// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
$sql ="UPDATE idpwd SET dp='$target_file'  
WHERE username='$fname1'";

if ($conn->query($sql) === TRUE)
{
header("location:profile.php");
   }else{
   echo "TRY AGAIN Later";header( "refresh:3;url=profile.php" );

   } }else {
        echo "Sorry, there was an error uploading your file.";header( "refresh:3;url=profile.php" );

    }}
$conn->close(); 
  ?>
  
  
  </body>
      </html>