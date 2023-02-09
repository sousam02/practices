<?php
include 'partials/header.php';
require('users.php');


if (!isset($_GET['id'])) {
    include 'partials/not_found.php';
    exit;
}

$user_id = $_GET['id'];

$user = getUserById($user_id);

if (!$user) {
    include 'partials/not_found.php';
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    updateUser($_POST, $user_id);

    header('Location: index.php');
}
?>


<?php include('_form.php'); ?>