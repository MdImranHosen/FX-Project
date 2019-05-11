<?php 
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../classes/Mainclasses.php');

$contact = new Mainclasses();

     $name     = $_POST['name'];
     $email    = $_POST['email'];
     $subject  = $_POST['subject'];
     $message  = $_POST['message'];

    $contact->contactUsInfo($name,$email,$subject,$message);