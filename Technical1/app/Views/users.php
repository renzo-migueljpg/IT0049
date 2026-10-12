<?php
/** @var array $users */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>User Accounts</title>

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
        <div class="page-header">
            <div>
                <h1>User Accounts</h1>
                <p class="subtitle">Manage user account information.</p>
            </div>

            <a href="<?= site_url('users/new') ?>" class="button">
                Add User
            </a>
        </div>

        <?php if (session('success')): ?>
            <div class="alert success-alert">
                <?= esc(session('success')) ?>
            </div>
        <?php endif; ?>

        <table>
            <thead>
                <tr>
                    <th>Avatar</th>
                    <th>Username</th>
                    <th>Full Name</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                <?php if (! empty($users) && is_array($users)): ?>

                    <?php foreach ($users as $user): ?>
                        <?php
                        $avatarFilename = ! empty($user['avatar'])
                            ? $user['avatar']
                            : 'default-avatar.svg';
                        ?>

                        <tr>
                            <td>
                                <img
                                    class="avatar-thumbnail"
                                    src="<?= base_url(
                                        'uploads/avatars/' . $avatarFilename
                                    ) ?>"
                                    alt="<?= esc($user['full_name']) ?> avatar"
                                >
                            </td>

                            <td><?= esc($user['username']) ?></td>
                            <td><?= esc($user['full_name']) ?></td>

                            <td>
                                <a
                                    href="<?= site_url(
                                        'users/' . $user['id'] . '/edit'
                                    ) ?>"
                                    class="button small"
                                >
                                    Edit
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                <?php else: ?>

                    <tr>
                        <td colspan="4">No user records were found.</td>
                    </tr>

                <?php endif; ?>
            </tbody>
        </table>
    </section>
</main>

</body>
</html>