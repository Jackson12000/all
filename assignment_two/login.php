<?php
//kubwimana aimee diane_222002776
session_start();
$servername = "localhost"; 
$username = "admin"; 
$password = "bityear2@2024"; 
$dbname = "bityeartwo2024"; 

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION['username'] = $username;
        header("Location: home page.html"); 
        exit();
    } else {
        $error = "Invalid username or password";
    }
}

$conn->close();
?>
