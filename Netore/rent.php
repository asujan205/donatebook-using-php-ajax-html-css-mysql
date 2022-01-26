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





	
	$name=$_POST['renter_name'];
	$place=$_POST['renter_address'];
	
	$phone=$_POST['renter_phone'];
	$book_id=$_SESSION['book_id'];
	$book_name=$_SESSION['book_name'];
	$varify=$_SESSION['varification_id'];
		$sql ="INSERT INTO renter (book_id,book_name,book_renter_name,address,phone_number,id_verification) VALUES ('$book_id','$book_name','$name','$place','$phone','$verify')";
		
	if ($conn->query($sql) === TRUE) {
    

}
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql1="UPDATE TABLE bookstore SET status='0' WHERE book_id='$book_id'";

$conn->query($sql1);
$conn->close();
?>