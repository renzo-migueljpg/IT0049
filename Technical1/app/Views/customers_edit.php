<?php
/** @var array $customer */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Customer</title>

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
        <h1>Edit Customer</h1>
        <p class="subtitle">Update the customer's account information.</p>

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

        <form
            action="<?= site_url('customers/' . $customer['id']) ?>"
            method="post"
        >
            <?= csrf_field() ?>

            <div class="form-group">
                <label for="full_name">Full Name</label>

                <input
                    type="text"
                    id="full_name"
                    name="full_name"
                    value="<?= esc(old('full_name', $customer['full_name'])) ?>"
                    maxlength="100"
                    required
                >
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    value="<?= esc(old('email', $customer['email'])) ?>"
                    maxlength="100"
                    required
                >
            </div>

            <div class="form-group">
                <label for="phone">Phone Number</label>

                <input
                    type="text"
                    id="phone"
                    name="phone"
                    value="<?= esc(old('phone', $customer['phone'])) ?>"
                    maxlength="20"
                >
            </div>

            <div class="form-actions">
                <button type="submit" class="button">
                    Update Customer
                </button>

                <a href="<?= site_url('customers') ?>" class="button secondary">
                    Cancel
                </a>
            </div>
        </form>
    </section>
</main>

</body>
</html>