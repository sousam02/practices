<?php 

function getUsers() {
    $users = json_decode(file_get_contents(__DIR__ . '/users.json'), true);
    return $users;
}

function getUserById($id){
    $users = getUsers();

    foreach($users as $user){
        if($user['id'] == $id){
            return $user;
        }
    }

    return null;
}

function createUser($data){

}

function updateUser($data){
    
}

function deleteUser($id) {

}