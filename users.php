<?php
// Connect to a database
$connection = mysqli_connect('localhost', 'root', '', 'ajaxcc');

$query = "SELECT * FROM users";

// GET result
$result = mysqli_query($connection, $query);

// Fetch data
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($users);
