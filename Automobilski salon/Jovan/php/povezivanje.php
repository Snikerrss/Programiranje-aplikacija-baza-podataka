<?php


$host = "localhost";
$username = "root";
$password = "";
$dbname = "automobilskisalon";

$mysqli = new mysqli($host, $username, $password, $dbname);
if ($mysqli->connect_error) {
    die('Error:(' . $this->mysqli->connect_errno . ')' . $this->mysqli->connect_error);
}
