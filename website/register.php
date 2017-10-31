<html>

<?php

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "Users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$firstname = $_POST['firstname'];

$surname = $_POST['surname'];

$email = $_POST['email'];

$password = $_POST['password'];

$query = "INSERT INTO User (FirstName, Surname, Email, Password) VALUES ('$firstname', '$surname', $email, $password);"

mysqli_master_query($conn, $query);

if (mysql_error($conn)) {die("MySQL error: ".mysqli_error($conn));}

	echo "<p>User added to database! </p>"

mysqli_close($conn);
?>

</html>