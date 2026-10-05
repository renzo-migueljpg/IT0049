<?php
/** @var array $tasks */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Complete Task List</title>

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
        <h1>Complete Task List</h1>

        <p class="subtitle">
            All recorded tasks arranged according to date.
        </p>

        <table>
            <thead>
                <tr>
                    <th>Task Title</th>
                    <th>Status</th>
                    <th>Task Date</th>
                </tr>
            </thead>

            <tbody>
                <?php if (! empty($tasks) && is_array($tasks)): ?>

                    <?php foreach ($tasks as $task): ?>
                        <?php
                        $statusClass = strtolower(
                            str_replace(' ', '-', $task['status'])
                        );
                        ?>

                        <tr>
                            <td><?= esc($task['title']) ?></td>

                            <td>
                                <span class="status <?= esc($statusClass) ?>">
                                    <?= esc($task['status']) ?>
                                </span>
                            </td>

                            <td><?= esc($task['task_date']) ?></td>
                        </tr>
                    <?php endforeach; ?>

                <?php else: ?>

                    <tr>
                        <td colspan="3">
                            No tasks were found.
                        </td>
                    </tr>

                <?php endif; ?>
            </tbody>
        </table>
    </section>

    <footer>
        Tasks for Today Management System
    </footer>
</main>

</body>
</html>