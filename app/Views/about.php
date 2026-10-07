<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="page-header">
    <p class="eyebrow">Project Information</p>
    <h1>About the System</h1>
    <p>Learn more about this laboratory activity and its developer.</p>
</section>

<section class="about-grid">
    <article class="about-card">
        <span class="about-number">01</span>
        <h2>The Project</h2>

        <p>
            <?= esc($project) ?> is a simple web application that displays
            today's tasks, the complete task schedule, and a demonstration
            user profile.
        </p>
    </article>

    <article class="about-card">
        <span class="about-number">02</span>
        <h2>Technology</h2>

        <p>
            The application was developed using <?= esc($framework) ?>,
            PHP, MySQL, HTML, and CSS. It follows the Model-View-Controller
            design pattern.
        </p>
    </article>

    <article class="about-card">
        <span class="about-number">03</span>
        <h2>Developer</h2>

        <p>
            This laboratory activity was developed by
            <strong><?= esc($developer) ?></strong>.
        </p>
    </article>
</section>

<?= $this->endSection() ?>