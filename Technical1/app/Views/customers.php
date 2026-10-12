<?php
/** @var array $customers */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Customer Accounts</title>

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
                <h1>Customer Accounts</h1>
                <p class="subtitle">Manage customer account information.</p>
            </div>

            <a href="<?= site_url('customers/new') ?>" class="button">
                Add Customer
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
                    <th>Full Name</th>
                    <th>Email Address</th>
                    <th>Phone Number</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                <?php if (! empty($customers) && is_array($customers)): ?>

                    <?php foreach ($customers as $customer): ?>
                        <tr>
                            <td><?= esc($customer['full_name']) ?></td>
                            <td><?= esc($customer['email']) ?></td>
                            <td><?= esc($customer['phone']) ?></td>

                            <td>
                                <a
                                    href="<?= site_url(
                                        'customers/' . $customer['id'] . '/edit'
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
                        <td colspan="4">No customer records were found.</td>
                    </tr>

                <?php endif; ?>
            </tbody>
        </table>
    </section>
</main>

</body>
</html>