<?php

// Connect to a database

$connection = mysqli_connect('localhost', 'root', '', 'ajaxcc');

echo 'Processing...';

// Check for POST variable
if (isset($_POST['name'])) {
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    // echo 'POST: Your name is ' . $_POST['name'];

    $query = "INSERT INTO users(name) VALUES('$name')";

    if (mysqli_query($connection, $query)) {
        echo 'User added!';
    } else {
        echo 'Error: ' . mysqli_error($connection);
    }
}
