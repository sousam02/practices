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

?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>View user: <?php echo $user['name'] ?> </h3>
        </div>
        <div class="card-body">
            <a href="update.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-outline-secondary">Update</a>
            <a href="delete.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-outline-danger">Delete</a>
        </div>
        <table class="table">
            <tbody>
                <tr>
                    <th>Name:</th>
                    <td> <?php echo $user['name'] ?> </td>
                </tr>
                <tr>
                    <th>Username:</th>
                    <td> <?php echo $user['username'] ?> </td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td> <?php echo $user['email'] ?> </td>
                </tr>
                <tr>
                    <th>Phone:</th>
                    <td> <?php echo $user['phone'] ?> </td>
                </tr>
                <tr>
                    <th>Website:</th>
                    <td> <?php echo $user['website'] ?> </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>




<?php include 'partials/footer.php'; ?>