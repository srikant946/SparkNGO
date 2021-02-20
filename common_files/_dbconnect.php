<?php

// Created for Common Database Connectivity..

// Connecting to the Database (BEFORE HOSTING)
/*
$servername = "localhost";
$username = "root";
$password = "";
$database = "spark_ngo_db";
*/

// Connecting to the Database (AFTER HOSTING)
$servername = "localhost";
$username = "root";
$password = "";
$database = "spark_ngo_db";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn)
{
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else
{
    // echo "Connection was successful<br>";
}

?>