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
$email = $_POST['email'];
//$sql1 = "INSERT INTO mail (email) VALUES('$email')";
$sql = "SELECT * FROM mail WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0)
 {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "Your E-mail id: " . $row["email"].  " has been breached somewhere";
        	header("Location:http://localhost/mail/breached.html");
    }
}
 else
 {
    //echo "Your account" . $row["email"]. " is safe";
    	header("Location:http://localhost/mail/safe.html");
}
$conn->close();
?>
