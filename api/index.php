<?php
$host_name = 'db5013796053.hosting-data.io';
$database = 'dbs11545287';
$user_name = 'dbu180396';
$password = 'S6Gk5wSQsq@qRbJ';

$link = new mysqli($host_name, $user_name, $password, $database);

if ($link->connect_error) {
    die('<p>Failed to connect to MySQL: ' . $link->connect_error . '</p>');
} else {
    echo '<p>Connection to MySQL server successfully established.</p>';
}
// echo 'Hello World!'
?>