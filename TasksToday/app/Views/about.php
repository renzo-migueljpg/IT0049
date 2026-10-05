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
    <a href="<?= site_url('/') ?>">Welcome</a>
    <a href="<?= site_url('tasks') ?>">Task List</a>
    <a href="<?= site_url('profile') ?>">Profile</a>
    <a href="<?= site_url('about') ?>">About</a>
</nav>

<main class="container">
    <section class="card">
        <h1>About the System</h1>

        <p class="subtitle">
            A simple internal application for organizing daily team tasks.
        </p>

        <p>
            The Tasks for Today Management System allows users to view tasks
            scheduled for today and browse the complete task list.
        </p>
        <p>
            CSS was used to style the system's interface, just to make it more presentable. 
        </p>
        <p>
            This system was developed using CodeIgniter 4, PHP, MySQL,
            HTML, and CSS.
        </p>

        <p>
            <strong>Developer:</strong> Renzo Miguel Espino
        </p>
    </section>

    <footer>
        Tasks for Today Management System
    </footer>
</main>

</body>
</html>