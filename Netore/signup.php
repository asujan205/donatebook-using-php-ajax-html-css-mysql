<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname="netore";
$qy="";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 





	
	$username=$_POST['user_name'];
	$password=$_POST['user_password'];
	
	$email=$_POST['user_email'];
	$id_varify=$_POST['id_varification_type'];
	$code=$_POST['id_varification_code'];
	
		$sql ="INSERT INTO userdata (user_name,user_password,id_verification,email) VALUES ('$username','$password','$code','$email')";
		
	if ($conn->query($sql) === TRUE) {
    
header('index.php');
}
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
?>