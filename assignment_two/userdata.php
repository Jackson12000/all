<?php
//ishimwe emmanuel:222004496
$servername = "localhost"; 
$username = "admin"; 
$password = "bityear2@2024"; 
$dbname = "bityeartwo2024"; 

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->select_db($dbname);

$sql = "INSERT INTO user (firstname, lastname, username, email, telephone, password,creationdate,activation_code,is_activated)
VALUES ('$_POST[firstname]', '$_POST[lastname]', '$_POST[username]', '$_POST[email]','$_POST[telephone]', '$_POST[password]','$_POST[creationdate]','$_POST[activation_code]','$_POST[is_activated]')";

if ($conn->query($sql) === TRUE) {
    echo " data inserted successfully<br>";
    header("location:index.php");
} else {
    echo "Error inserting sample data: " . $conn->error;
}

// Close connection
$conn->close();
?>
