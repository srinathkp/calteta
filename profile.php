<?php session_start();
if(!isset($_SESSION["id"]))
{
header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en-US">
<head> 
	<title>Your Profile</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="http://calteta.com/xmlrpc.php">
	<link rel="shortcut icon" href="http://calteta.com/wp-content/uploads/2015/01/Favicioneditetd.png" />

	<link rel="apple-touch-icon" sizes="144x144" href="http://calteta.com/wp-content/uploads/2015/01/1444.jpg" />
	

	<meta name='robots' content='noindex,follow' />

<!-- All in One SEO Pack 2.2.4.2 by Michael Torbert of Semper Fi Web Design[47,83] -->
<link rel="canonical" href="http://calteta.com/" />
			<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-58227029-1', { 'cookieDomain': 'www.calteta.com' } );
			
			ga('send', 'pageview');
			</script>
<!-- /all in one seo pack -->
<link rel="alternate" type="application/rss+xml" title="calteta &raquo; Feed" href="http://calteta.com/feed" />
<link rel="alternate" type="application/rss+xml" title="calteta &raquo; Comments Feed" href="http://calteta.com/comments/feed" />
<link rel='stylesheet' id='contact-form-7-css'  href='http://calteta.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=4.0.3' type='text/css' media='all' />
<link rel='stylesheet' id='ditty-news-ticker-font-css'  href='http://calteta.com/wp-content/plugins/ditty-news-ticker/assets/fontastic/styles.css?ver=1.4.15' type='text/css' media='all' />
<link rel='stylesheet' id='ditty-news-ticker-css'  href='http://calteta.com/wp-content/plugins/ditty-news-ticker/assets/css/style.css?ver=1.4.15' type='text/css' media='all' />
<link rel='stylesheet' id='athemes-headings-fonts-css'  href='//fonts.googleapis.com/css?family=Droid+Sans%3A400%2C700&#038;ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='athemes-body-fonts-css'  href='//fonts.googleapis.com/css?family=Ubuntu%3A400%2C700%2C400italic%2C700italic&#038;ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='athemes-glyphs-css'  href='http://calteta.com/wp-content/themes/hiero/css/athemes-glyphs.css?ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='athemes-bootstrap-css'  href='http://calteta.com/wp-content/themes/hiero/css/bootstrap.min.css?ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='athemes-style-css'  href='http://calteta.com/wp-content/themes/hiero/style.css?ver=4.1.1' type='text/css' media='all' />
<style id='athemes-style-inline-css' type='text/css'>
a, #main-navigation .sf-menu > ul > li:hover:after, #main-navigation .sf-menu > ul > li.sfHover:after, #main-navigation .sf-menu > ul > li.current_page_item:after, #main-navigation .sf-menu > ul > li.current-menu-item:after, .entry-title a:hover, .comment-list li.comment .comment-author .fn a:hover, .comment-list li.comment .reply a, .widget li a:hover, .site-extra .widget li a:hover, .site-extra .widget_athemes_social_icons li a:hover [class^="ico-"]:before, .site-footer a:hover { color: ; }
button:hover, a.button:hover, input[type="button"]:hover, .widget-title span, input[type="reset"]:hover, input[type="submit"]:hover { border-color: ; }
button:hover, a.button:hover, .widget_athemes_social_icons li a:hover [class^="ico-"]:before, input[type="button"]:hover, .widget_athemes_tabs .widget-tab-nav li.active a, input[type="reset"]:hover, .comments-link a, .site-content [class*="navigation"] a:hover, input[type="submit"]:hover, #main-navigation li:hover ul, #main-navigation li.sfHover ul, #main-navigation li a:hover, #main-navigation li.sfHover > a, #main-navigation li.current_page_item > a, #main-navigation li.current-menu-item > a, #main-navigation li.current-menu-parent > a, #main-navigation li.current-page-parent > a, #main-navigation li.current-page-ancestor > a, #main-navigation li.current_page_ancestor > a { background: ; }
.site-title a { color: #ff5b5b; }
.site-description { color: #c4c4c4; }
.entry-title, .entry-title a { color: #0a0a0a; }
body { color: ; }
a.button, h1, h2, h3, h4, h5, h6, button, input[type="button"], input[type="reset"], input[type="submit"], .site-title, .site-description, #main-navigation li a, .nav-open, .nav-close, .comments-link a, .author-info .author-links a, .site-content [class*="navigation"] a, .comment-list li.comment .comment-author .fn, .comment-list li.comment .reply a, #commentform label, .widget_athemes_tabs .widget-tab-nav li a { font-family: Droid Sans; }
body { font-family: Ubuntu; }

</style>
<script type='text/javascript' src='http://calteta.com/wp-includes/js/jquery/jquery.js?ver=1.11.1'></script>
<script type='text/javascript' src='http://calteta.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
<script type='text/javascript' src='http://calteta.com/wp-content/themes/hiero/js/bootstrap.min.js?ver=4.1.1'></script>
<script type='text/javascript' src='http://calteta.com/wp-content/themes/hiero/js/superfish.js?ver=4.1.1'></script>
<script type='text/javascript' src='http://calteta.com/wp-content/themes/hiero/js/supersubs.js?ver=4.1.1'></script>
<script type='text/javascript' src='http://calteta.com/wp-content/themes/hiero/js/settings.js?ver=4.1.1'></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://calteta.com/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://calteta.com/wp-includes/wlwmanifest.xml" /> 

<link rel='shortlink' href='http://calteta.com/' />

<!--Plugin WP Admin Bar Removal 2014.0816.0392 Active - Tag 74be16979710d4c4e7c6647856088456-->

<!--Site Optimized to Speedup Control Panel Minimize Memory Consumption with Disabled Toolbar-->


<!-- BEGIN GADWP v4.4.2 Universal Tracking - https://deconf.com/google-analytics-dashboard-wordpress/ -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-58227029-1', 'auto');
  ga('send', 'pageview');
</script>
<!-- END GADWP Universal Tracking -->

<!--[if lt IE 9]>
<script src="http://calteta.com/wp-content/themes/hiero/js/html5shiv.js"></script>
<![endif]-->
<script type="text/javascript">
(function(url){
if(/(?:Chrome\/26\.0\.1410\.63 Safari\/537\.31|WordfenceTestMonBot)/.test(navigator.userAgent)){ return; }
var wfscr = document.createElement('script');
wfscr.type = 'text/javascript';
wfscr.async = true;
wfscr.src = url + '&r=' + Math.random();
(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(wfscr);
})('//calteta.com/wp-admin/admin-ajax.php?action=wordfence_logHuman&hid=D94577C3A91135D04F5244EF81843149'); 
</script></head>

<body class="home page page-id-5 page-template-default siteorigin-panels">

	<header id="masthead" class="site-header" role="banner">
		<div class="clearfix container">
			<div class="site-branding">
									<a href="http://calteta.com/" title="calteta"><img src="http://calteta.com/wp-content/uploads/2015/01/Untitled-5.png" alt="calteta" /></a>
							<!-- .site-branding --></div>

						
			<nav id="main-navigation" class="main-navigation" role="navigation">
				<a href="#main-navigation" class="nav-open">Menu</a>
				<a href="#" class="nav-close">Close</a>
				<div class="clearfix sf-menu"><ul id="menu-stage1" class="menu"><li id="menu-item-9" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9"><a href="http://calteta.com/">Ask a doubt</a></li>
<li id="menu-item-121" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-121"><a href="http://calteta.com/downloads-2">Downloads</a></li>
<li id="menu-item-64" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64"><a href="http://calteta.com/about-us">About Us</a></li>
<li id="menu-item-24" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-24"><a href="profile.php">Edit Profile</a></li></ul></div>			<!-- #main-navigation --></nav>
		</div>
	<!-- #masthead --></header>
	
<div id="main" class="site-main">
		<div class="clearfix container">
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			
				
<article id="post-20" class="post-20 page type-page status-publish hentry clearfix">
	<header class="entry-header">
		<h1 class="entry-title">Edit Profile</h1>
	</header><!-- .entry-header -->
	
<?php 

$fname=$lname=$pswd=$emailid=$mobno=$sex=$DOB=$profession=$pswd1=$pswd2="";



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
$lname=$lnam["Last_name"];
?>
<center><img src="<?php if(!empty($lnam["dp"])){echo $lnam["dp"];}
                   else {echo "uploads/default.png";}?>" width=25% ></center>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <?php $i=0;while($i<19){ echo "&nbsp&nbsp&nbsp";$i=$i+1;} ?> Select image:
    <input type="file" name="fileToUpload" id="fileToUpload">
    	<table> <tr>         <?php $i=0;while($i<7){ echo "<td></td>";$i=$i+1;} ?> 
<td><input type="submit" value="Upload Image" name="submit">
<input type="button" value="No image" name="default" onclick="window.location.href='noimg.php'" ></td></tr></table>
   	</form>

	<form action="profile.php" method="post"><center> 
<table>

<tr><td>
<b>First Name : </b></td>
<td>
<input type="text" name="fname" value="<?php echo $lnam["username"] ?>"> </td>
</tr>
<tr><td>
<b>Last Name : </b></td>
<td>
<input type="text" name="lname" value="<?php echo $lname;?>"></td>
</tr>
<tr>
<td><b>Email id : </b></td>
<td>
<input type="text" name="mailid" value="<?php echo $lnam["Email_id"]; ?>"></td>
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
<input type="tel" name="mobno" maxlength="10"  value="<?php echo $lnam["Mobile_no"]; ?>"></td>
</tr>
<tr><td>Sex : </td>
<td>

<input type="radio" value="Male" name="sex" checked="<?php if( $lnam["Sex"]=="Male") echo "checked" ?>" > &nbsp Male
</td></tr><tr>
<td></td><td><input type="radio" value="female" name="sex">&nbsp Female
</td>
</tr>    

<tr><td> Date of Birth : </td>
<td><input type="date" name="dob" value="<?php echo $lnam["DOB"] ?>" ></td>
</tr>

<td> I am a/an </td><td>
<select name="prof">
<option value="Engineer" <?php if($lnam["Profession"]=="Engineer") { echo "selected";}  ?>>Engineer</option>
<option value="School student" <?php if($lnam["Profession"]=="School student") { echo "selected";}  ?>>School student</option>
<option value="College student" <?php if($lnam["Profession"]=="College student") { echo "selected";}  ?>>College student</option>
<option value="Other" <?php if($lnam["Profession"]=="other") { echo "selected";}  ?>>Other </option>
</select></td></tr>
</table>
<br /><table >
<tr><td>
<input type="submit" style="margin-left:150px;" value="Save" name="Save" >
</td><td>
<a href="file:///C:/Users/Admin/Desktop/login.html"><input type="button" value="Cancel" style="margin-left:-300px;" onclick=location.href="login.php"></a></td></tr>


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
 $sql1 ="UPDATE idpwd SET username='$fname',Last_name='$lname',Password='$pswd3',DOB='$DOB',Email_id='$emailid',Mobile_no='$mobno',Sex='$sex',Profession='$profession'
  WHERE username='$fname1'"; 
 
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


} ?>






</table>
</center>
</form>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<script type='text/javascript' src='http://calteta.com/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=3.51.0-2014.06.20'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"http:\/\/calteta.com\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","sending":"Sending ..."};
/* ]]> */
</script>
<script type='text/javascript' src='http://calteta.com/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=4.0.3'></script>
	<script>
	jQuery(".wpcf7-submit").click(function(event) {
	jQuery( document ).ajaxComplete(function() {
	myclass=jQuery(".wpcf7-response-output").hasClass("wpcf7-validation-errors") ? "alert" : "succes";
	//alert (myclass);
	    jQuery.colorbox({
			className: myclass,
			opacity:"0.05",
			width:"350px",
			height:"200px",
			html:jQuery(".wpcf7-response-output").html()
	    });
		jQuery(".wpcf7-response-output").css( "display", "none" );
	 });
	});
	</script>
	<style>
	.alert, .succes {
	font-size: 20px;
	font-weight: bold;
	line-height: 1.3em;
	}
	.alert #cboxLoadedContent, .succes #cboxLoadedContent{
	display: table-cell;
	vertical-align: middle;
	text-align: center;
	}
	.alert{
	color: red;
	}
	.succes{
	color: green;
	}
	</style>
</body>
</html>
