<?php
include 'partials/header.php';
require 'users.php';

if (!isset($_GET['id'])) {
    include('partials/not_found.php');
    exit;
}

$user_id = $_GET['id'];

$user = getUserById($user_id);
if (!$user) {
    include('partials/not_found.php');
    exit;
}
deleteUser($user_id);
header('Location: index.php');
