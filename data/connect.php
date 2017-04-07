<?php
// $mysqli = new mysqli("localhost", "root", "", "data");
// if ($mysqli->connect_errno) {
//     echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
// }   

$mysqli = new mysqli("localhost", "data", "dataapp", "20482_data");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}   



