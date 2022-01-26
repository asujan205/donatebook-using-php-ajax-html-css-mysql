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





	
	$name=$_POST['doner_name'];
	$place=$_POST['doner_address'];
	
	$phone=$_POST['doner_phone'];
	$donated_items=$_POST['book'];
	$num=$_POST['itemnumber'];
		$sql ="INSERT INTO doner (donated_items_name,donated_items_numbers,donar_name,donar_address,doner_phone) VALUES ('$donated_items','$num','$name','$place','$phone')";
	if ($conn->query($sql) === TRUE) {
    

}
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>