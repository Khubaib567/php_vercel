<?php
// index.php

// Define the base path for the React app (change this to match your setup)
$reactAppBasePath = 'build';

// Get the requested URL
$requestedUrl = $_SERVER['REQUEST_URI'];

// Serve the requested file from the React app's build directory
$file = $reactAppBasePath . $requestedUrl;

// Check if the file exists, and if not, serve the main index.html file
if (file_exists($file)) {
    return false;
    // echo "File has retrieved!";
} else {
    include($reactAppBasePath . '/index.html');
}
?>
