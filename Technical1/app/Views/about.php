<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Page</title>
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

    <h3>About the POS System</h3>
    <p>Good day! Sir Joseph Calleja, This website is my output for Technical Formative Assessment 1.</p>
    <p>Renzo Miguel R. Espino</p>

</body>
</html>