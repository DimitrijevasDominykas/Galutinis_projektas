<?php
define("DB_SERVER","localhost");
define("DB_PASSWORD", "");
define("DB_USER","root");
define("DB_NAME", "contact");

$mysqli = new mysqli(DB_SERVER, DB_USER, DB_NAME);
if($mysqli->connect_error){
    echo "Sorry,website got an error.\n";
    echo 'Error:' . $mysqli->connect_error . '\n';
    exit();
}

mysqli_query($mysqli, "INSERT INTO clients (name, email, message)
VALUES('$_POST[name]', '$_POST[email]', '$_POST[message]') ");

?>