<?php
    $host = 'localhost';
    $dbname = 'oyester';
    $username = 'root';
    $password = '';


    $db = new mysqli($host, $username, $password, $dbname);

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

?>