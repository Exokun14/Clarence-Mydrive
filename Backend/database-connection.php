<?php
    $serverName = "localhost";
    $databaseName = "dbms";
    $username = "root";
    $password = "";

    global $connection;

    $connection = new mysqli($serverName, $username, $password, $databaseName);

    if ($connection -> connect_error) {
        die ("Connection failed" .$connection -> connect_error);
    }
?>