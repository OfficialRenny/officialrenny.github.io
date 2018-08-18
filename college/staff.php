<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="w3.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="dropdown.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="social.css">
	</head>
	<body> 
<nav class="topnav" id="myTopnav">
<img class="logo" src="img/logo2.png">
<a href="index.html">Home</a>
<a href="gallery.html">Gallery</a>
<a href="about.html">About Us</a>
<a href="contact.html">Contact</a>
<a href="external.html">External Links</a>
<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="navBar()">&#9776;</a>
</nav>
<div class="w3-container"
<?php
$username = "user";
$password = "password";

if ($_POST['txtUsername'] != $username || $_POST['txtPassword'] != $password) {

?>

<form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <p><label for="txtUsername">Username</label>
    <br /><input type="text" title="Enter your Username" name="txtUsername" /></p>
    <p><label for="txtPassword">Password</label>
    <br /><input type="password" title="Enter your Password" name="txtPassword" /></p>
    <p></p><input class="w3-button w3-black" type="submit" name="Submit" value="Login" /></p>
</form>

<?php

}
else {
    
?>

<p>This is a password protected page.</p>

<?php

}

?>
</div>
<script>
function navBar() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
<footer class="footer">
    <div align="left">
<a href="https://www.facebook.com" class="fa fa-facebook"></a>
<a href="https://www.twitter.com" class="fa fa-twitter"></a>
<a href="https://www.flickr.com" class="fa fa-flickr"></a>
<a href="https://www.vimeo.com" class="fa fa-vimeo"></a>
<a href="/staff.php" class="fa fa-key"></a>
</div></footer>
</body>
</html>