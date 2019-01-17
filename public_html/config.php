<?php
$host = 'mysql';
$user = 'root';
$pass = 'rootpassword';
$db = 'person';
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected to MySQL successfully!";

$sql = "CREATE TABLE IF NOT EXISTS mahasiswa (
name VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
pwd VARCHAR(30) NOT NULL,
reg_date TIMESTAMP
)";

$conn->query($sql);

/*if ($conn->query($sql) === TRUE) {
    echo "Table Mahasiswa created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
*/
?>
