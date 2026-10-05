<?php
/** @var array|null $user */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>User Profile</title>

    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>

<nav>
    <a href="<?= site_url('/') ?>">Welcome</a>
    <a href="<?= site_url('tasks') ?>">Task List</a>
    <a href="<?= site_url('profile') ?>">Profile</a>
    <a href="<?= site_url('about') ?>">About</a>
</nav>

<main class="container">
    <section class="card">
        <h1>User Profile</h1>

        <p class="subtitle">
            Information about the system's demo user.
        </p>

        <?php if (isset($user) && is_array($user)): ?>

            <div class="profile-details">
                <p>
                    <strong>Username:</strong>
                    <?= esc($user['username']) ?>
                </p>

                <p>
                    <strong>Full Name:</strong>
                    <?= esc($user['full_name']) ?>
                </p>

                <p>
                    <strong>Email:</strong>
                    <?= esc($user['email']) ?>
                </p>
            </div>

        <?php else: ?>

            <p>No user record was found.</p>

        <?php endif; ?>
    </section>

    <footer>
        Tasks for Today Management System
    </footer>
</main>

</body>
</html>