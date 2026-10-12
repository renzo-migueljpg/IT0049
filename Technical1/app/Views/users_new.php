<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>New User</title>

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
        <h1>New User</h1>
        <p class="subtitle">Enter the user's account information.</p>

        <?php if (session('errors')): ?>
            <div class="alert error-alert">
                <strong>Please correct the following errors:</strong>

                <ul>
                    <?php foreach (session('errors') as $error): ?>
                        <li><?= esc($error) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?= site_url('users') ?>" method="post">
            <?= csrf_field() ?>

            <div class="form-group">
                <label for="username">Username</label>

                <input
                    type="text"
                    id="username"
                    name="username"
                    value="<?= esc(old('username')) ?>"
                    maxlength="50"
                    required
                >
            </div>

            <div class="form-group">
                <label for="full_name">Full Name</label>

                <input
                    type="text"
                    id="full_name"
                    name="full_name"
                    value="<?= esc(old('full_name')) ?>"
                    maxlength="100"
                    required
                >
            </div>

            <div class="form-actions">
                <button type="submit" class="button">
                    Save User
                </button>

                <a href="<?= site_url('users') ?>" class="button secondary">
                    Cancel
                </a>
            </div>
        </form>
    </section>
</main>

</body>
</html>