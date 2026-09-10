<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Accounts</title>
    <?php /** just to make the webpage look better*/ ?>
    <style>
    body {
        font-family: Arial, sans-serif;
        text-align: center;
    }

    nav {
        margin-bottom: 30px;
    }

    nav a {
        margin: 0 10px;
    }

    table {
        margin: 20px auto;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 10px;
    }
</style>
</head>
<body>
    <nav>
        <a href="<?= site_url('/') ?>">Home</a>
        <a href="<?= site_url('about') ?>">About</a>
        <a href="<?= site_url('customers') ?>">Customers</a>
        <a href="<?= site_url('users') ?>">Users</a>
    </nav>

    <h1>User Accounts</h1>

    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>Username</th>
                <th>Full Name</th>
                <th>Role</th>
            </tr>
        </thead>

        <tbody>
            
        <?php /** @var array $users */ ?>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= esc($user['username']) ?></td>
                    <td><?= esc($user['full_name']) ?></td>
                    <td><?= esc($user['role']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>