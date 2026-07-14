<?php
$conn = new mysqli("localhost","root","","cinewave");

if ($conn->connect_error) {
    die("Conenection failed: ".$conn->connect_error);
}
?>