<?php
/**
 * Created by PhpStorm.
 * User: evil_
 * Date: 2/19/2017
 * Time: 11:59 AM
 */

@include ('connection.php');

$name = $_POST['name'];
$kidname = $_POST['kidname'];
$kidage = $_POST['kidage'];
$phone = $_POST['phone'];
$email = $_POST['email'];



$sql = "INSERT INTO pillers (mothername , kidname , kidage , phone , email)
VALUES ('$name' , '$kidname' ,'$kidage' , '$phone' ,'$email')";

if ($mysqli->query($sql) === TRUE) {
    echo "Message Sent , Thank You " . $name ." , We All Be in Touch With You ASAP\n";
} else {
    echo "Error" . $mysqli->error;
}
$mysqli ->close();
