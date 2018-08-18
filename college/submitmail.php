<?php

//connection info
$host="localhost"; 
$username="sor17216_renny";
$password="Renaldas123";
$dbname="sor17216_site";
	
//create connection
$conn = mysqli_connect($host, $username, $password, $dbname);

//returns error if failed
if (!$conn) {
	die("Connection failed: " . mysqli_contact_error());
}


// validation
//if (empty($firstname) && empty($lastname) && empty($email)) {
//	echo 'Please correct the fields';
//	return false;
//}


//storing as php values
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$message = $_POST["message"];

// inserting in the sql database
$sql = "INSERT INTO contact (firstname, lastname, email, message) VALUES ('$firstname', '$lastname', '$email', '$message')";

//returns message if its added or not
if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<script>
window.close();
</script>