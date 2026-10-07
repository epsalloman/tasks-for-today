<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= esc($title) ?> | Tasks for Today</title>

    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>

    <header>
        <nav class="navbar">
            <a class="brand" href="<?= site_url('/') ?>">
                Tasks for Today
            </a>

            <div class="nav-links">
                <a href="<?= site_url('/') ?>">Home</a>
                <a href="<?= site_url('tasks') ?>">All Tasks</a>
                <a href="<?= site_url('profile') ?>">Profile</a>
                <a href="<?= site_url('about') ?>">About</a>
            </div>
        </nav>
    </header>

    <main class="container">
        <?= $this->renderSection('content') ?>
    </main>

    <footer>
        <p>
            &copy; <?= date('Y') ?> Tasks for Today Management System
        </p>
    </footer>

</body>
</html>