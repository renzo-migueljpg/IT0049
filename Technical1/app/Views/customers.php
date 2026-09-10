<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer Accounts</title>
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

    <h1>Customer Accounts</h1>

    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>

        <tbody>

        <?php /** @var array $customers */ ?>
            <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?= esc($customer['full_name']) ?></td>
                    <td><?= esc($customer['email']) ?></td>
                    <td><?= esc($customer['phone']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>