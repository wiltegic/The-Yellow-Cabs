<?php
ini_set('display_errors', 0);
error_reporting(E_ALL ^ E_STRICT);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tyc";

$CRM_URL = "http://localhost/the_yellow_cabs";
$site_url = "http://localhost/The-Yellow-Cabs/PHP";

// Create connection
$db = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}
?> 