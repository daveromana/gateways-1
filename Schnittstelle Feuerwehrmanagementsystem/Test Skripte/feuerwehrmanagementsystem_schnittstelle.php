<?php

$id=$_POST['id'];
$einsatzNummer=$_POST['einsatzNummer'];
$stichwort=$_POST['stichwort'];
$alarmierungsZeit=$_POST['alarmierungsZeit'];
$einsatzAusfahrt=$_POST['einsatzAusfahrt'];
$einsatzEnde=$_POST['einsatzEnde'];
$ort=$_POST['ort'];
$einsatzleiter=$_POST['einsatzleiter'];
$fahrzeuge=$_POST['fahrzeuge'];
$beschreibung=$_POST['beschreibung'];

$sichtbar=$_POST['sichtbar'];
$secretkey=$_POST['secretkey'];


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

$sql = "INSERT INTO `homepage_ff_test`.`test2` 
(`id`,`einsatzNummer`, `stichwort`, `alarm`, `ausfahrt`, `ende`, `ort`, `einsatzleiter`, 
`fahrzeuge`, `beschreibung`, `sichtbar`, `secretkey`) VALUES 
('$id','$einsatzNummer', '$stichwort', '$alarmierungsZeit', '$einsatzAusfahrt', '$einsatzEnde', '$ort', '$einsatzleiter', '$fahrzeuge', '$beschreibung', '$sichtbar', '$secretkey');";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?> 

    
   