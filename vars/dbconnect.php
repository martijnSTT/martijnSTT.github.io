<?php

function open_database_connection()
{
    // Create connection
    $conn = new mysqli(HOST, USER, PASS, DB);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $conn->set_charset('utf8');

    return $conn;
}

//CLOSE DATABASE CONNECTION
function close_database_connection($conn)
{
    $conn->close();
}
