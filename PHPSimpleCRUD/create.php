<?php
include 'partials/header.php';
require('users.php');
$user = [
    'id' => '',
    'name' => '',
    'username' => '',
    'email' => '',
    'phone' => '',
    'website' => '',

];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = createUser($_POST);

    header('Location: index.php');
}


?>

<?php include('_form.php'); ?>