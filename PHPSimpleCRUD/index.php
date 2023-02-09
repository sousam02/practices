<?php
require('users.php');

$users = getUsers();
include 'partials/header.php';

?>

<div class="container">
    <p>
        <a class="btn btn-outline-success" href="create.php">Create new User</a>
    </p>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Website</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?php echo $user['name'] ?></td>
                    <td><?php echo $user['username'] ?> </td>
                    <td><?php echo $user['email'] ?></td>
                    <td><?php echo $user['phone'] ?> </td>
                    <td><?php echo $user['website'] ?></td>
                    <td>
                        <a href="view.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-outline-info">View</a>
                        <a href="update.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-outline-secondary">Update</a>
                        <a href="delete.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-outline-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>



<?php include 'partials/footer.php'; ?>