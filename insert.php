<?php 
include "koneksi.php";
$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Shalva', 'Sabrina', 'john@example.com')";

if ($connection->query($sql) === TRUE) {
    $last_id = $connection->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}









?>