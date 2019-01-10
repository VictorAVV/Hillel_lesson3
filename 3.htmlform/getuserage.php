<?php
$nameErr = $surnameErr = $ageErr = false;

if (!isset($_POST['name']) ) {
    header('Location: index.html'); 
}

if (isset($_POST['name']) ) {
    $name = trim($_POST['name']);
}
if (isset($_POST['surname']) ) {
    $surname = trim($_POST['surname']);
}
if (isset($_POST['birthday']) ) {
    $birthday = $_POST['birthday'];
}

if (!preg_match("/^([a-zA-Z' ])+$/",$name) || strlen($name) > 30) {
    $nameErr = true;
}
if (!preg_match("/^([a-zA-Z' ])+$/",$surname) || strlen($surname) > 30) {
    $surnameErr = true; 
}

$age = calculate_age($birthday);
if ($age < 0) {
    $ageErr = true; 
}

if ($nameErr || $surnameErr || $ageErr) {
    require_once('errormsg.php');
} else {
    require_once('agemsg.php');
}

function calculate_age($birthday) {
    $birthday_timestamp = strtotime($birthday);
    $age = date('Y') - date('Y', $birthday_timestamp);
    if (date('md', $birthday_timestamp) > date('md')) {
        $age--;
    }
    return $age;
}

?>