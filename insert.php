<?php
/* Attempt MySQL server connection.*/
$link = mysqli_connect("localhost", "root", "", "simpleDB");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape inputs
$is_French = mysqli_real_escape_string($link, $_REQUEST['is_French']);
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$city = mysqli_real_escape_string($link, $_REQUEST['city']);
$province = mysqli_real_escape_string($link, $_REQUEST['province']);
$postal_Code = mysqli_real_escape_string($link, $_REQUEST['postal_Code']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
 
// Attempt full insertion
	$sql = "INSERT INTO registrants (is_French, name, address, city, province, postal_Code, email) VALUES ('$is_French', '$name', '$address', '$city', '$province', '$postal_Code', '$email')";
	// Attempt execution
	if(mysqli_query($link, $sql)){
	    // Records created successfully. Redirect to landing
	    header("location: successfully.php");
	    exit();
	} else{
	    echo "You dun goofed. Please try again. <a href="/">Go Back</a>";
	}

// Close connection
mysqli_close($link);
?>
