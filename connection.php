<?php
/**
 * Created by PhpStorm.
 * User: Mohammad Ashraf
 * Date: 2/19/2017
 * Time: 11:59 AM
 */

$server = "localhost";
$user = "root";
$password = "";
$database = "pillers";

// Create connection
$mysqli = new mysqli($server, $user, $password , $database);

//arabic words
$mysqli->query("SET NAMES utf8");

$mysqli->query("SET CHARACTER SET utf8");

$mysqli->set_charset('utf8');

$mysqli->set_charset('utf-8');

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
