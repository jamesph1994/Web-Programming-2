<html>
<title>Admin Page</title>
	
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

$sql = "SELECT email, firstname, surname FROM User";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "name: " . $row["firstname"] . " " . $row["surname"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

</html>