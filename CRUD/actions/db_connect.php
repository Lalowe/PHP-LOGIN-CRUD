<?php

$hostname = "127.0.0.1"; // this is the hostname that you can find in the PhpMyAdmin and you can write "localhost" too
$username = "root"; // be default the userName for the databases is root
$password = ""; // by default there is no password in the databases
$dbname = "crud_example"; // here we need to write the Database name

// create connection
$connect = mysqli_connect($localhost, $username, $password, $dbname);
// check connection
if (!$connect) {
   die("Connection failed: " . mysqli_connect_error());
}else {

    echo "Connected successfully";

}

//So as a first step we connect our project to the database. 
//As a second step we will introduce some data into the database, and then we will bring this information from our database using php. For this purpose, 
//we will learn about fetching functions in one of the following sections.
//path to this http://localhost/CRUD/actions/db_connect.php