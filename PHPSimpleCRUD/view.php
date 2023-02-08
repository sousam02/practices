<?php
require ('users.php');

$user_id = $_GET['id'];

$user = getUserById($user_id);

print_r($user);