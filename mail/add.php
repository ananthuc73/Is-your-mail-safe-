<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mail";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$email1 = $_POST['email1'];
$sql1 = "INSERT INTO mail (email) VALUES('$email1')";
//$sql = "SELECT * FROM mail WHERE email = '$email1'";

if ($conn->query($sql1) === TRUE) {
    echo "The E-mail id: " . $row["email"].  " has been added to the breached list";
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}

$conn->close();
?>
