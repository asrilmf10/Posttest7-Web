<?php

$server = "localhost";
$username = "root";
$password = "";
$db_name = "resep";

$db = new mysqli($server, $username, $password, $db_name);
if(!$db) {
    die("INVALID !!!");
}