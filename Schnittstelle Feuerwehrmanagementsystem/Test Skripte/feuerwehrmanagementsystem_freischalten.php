<?php

$id=$_REQUEST['id'];

$server= "127.0.0.1"; /* Adresse des 1&amp;1 Datenbankservers */
$user= "root"; /* Datenbank-Benutzername */
$passwort= "root"; /* Passwort */
$datenbank= "homepage_ff_test"; /* Name der Datenbank */

// Create connection
$conn = new mysqli($server, $user, $passwort, $datenbank);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "Update test2 set sichtbar = 1 where id = '$id';";


if ($conn->query($sql) === TRUE) {
    echo "New record successfully updated and published";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?> 

    
   