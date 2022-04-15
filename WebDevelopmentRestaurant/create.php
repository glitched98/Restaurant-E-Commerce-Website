<?php
$servername = "localhost";
$username = "f9zhang";
$password = "Sneodcai";
$dbname = "f9zhang";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE finalp (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$sql = "INSERT INTO finalp (firstname, lastname, email)
VALUES ('Nancy', 'Zhang', 'Nancy@example.com');";
$sql .= "INSERT INTO finalp  (firstname, lastname, email)
VALUES ('Omar', 'Syed', 'Omar@example.com');";
$sql .= "INSERT INTO finalp (firstname, lastname, email)
VALUES ('Shawn', 'Cameron', 'Shawn@example.com')";

if ($conn->multi_query($sql) === TRUE) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


