<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About</title>

    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>

<nav>
    <a href="<?= site_url('/') ?>">Home</a>
    <a href="<?= site_url('about') ?>">About</a>
    <a href="<?= site_url('customers') ?>">Customers</a>
    <a href="<?= site_url('users') ?>">Users</a>
</nav>

<main class="container">
    <section class="card">
        <h1>About the System</h1>

        <p class="subtitle">
            Information about the POS Management System.
        </p>

        <p>
            Good day sir Calleja!, this is my output for tevchniacal 3 activity.
            Css is used to style the page and make it visually appealing.
        </p>

        <p>
            The system supports creating and editing accounts, validating
            submitted information, and uploading prepared profile pictures
            for users.
        </p>

        <p>
            <strong>Developer:</strong> Renzo Miguel Espino
        </p>
    </section>

    <footer>
        POS Management System
    </footer>
</main>

</body>
</html>