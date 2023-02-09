<?php

function getUsers()
{
    $users = json_decode(file_get_contents(__DIR__ . '/users.json'), true);
    return $users;
}

function getUserById($id)
{
    $users = getUsers();

    foreach ($users as $user) {
        if ($user['id'] == $id) {
            return $user;
        }
    }

    return null;
}

function createUser($data)
{
    $users = getUsers();

    $data['id'] = rand(100000, 200000);

    $users[] = $data;

    putJson($users);

    return $data;
}

function updateUser($data, $id)
{
    $users = getUsers();
    foreach ($users as $i => $user) {
        if ($user['id'] == $id) {
            $users[$i] = array_merge($user, $data);
        }
    }
    putJson($users);
}

function deleteUser($id)
{
    $users = getUsers();
    foreach ($users as $i => $user) {
        if ($user['id'] == $id) {
            // unset($users[$i]);
            array_splice($users, $i, 1);
        }
    }

    putJson($users);
}


function putJson($users)
{
    file_put_contents('users.json', json_encode($users));
}
