<?php
/**
 * Created by PhpStorm.
 * User: pashutaz
 * Date: 24/02/2018
 * Time: 17:54
 */

$servername = "shareddb-f.hosting.stackcp.net";
$username = "HoneyDB-32347889";
$password = "HoneyDB-32347889";
$database = "HoneyDB-32347889";
// Create connection
$link = new mysqli($servername, $username, $password,$database);

// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}
//echo "Connected successfully";