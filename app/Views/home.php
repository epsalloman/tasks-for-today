<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="hero">
    <p class="eyebrow">Daily Task Dashboard</p>
    <h1>Tasks for Today</h1>
    <p class="subtitle"><?= esc($today) ?></p>
</section>

<section>
    <div class="section-heading">
        <div>
            <h2>Today's Schedule</h2>
            <p>Here are the tasks that need your attention today.</p>
        </div>

        <a class="button" href="<?= site_url('tasks') ?>">
            View All Tasks
        </a>
    </div>

    <?php if (empty($tasks)): ?>
        <div class="empty-state">
            <h3>No tasks scheduled today</h3>
            <p>You have completed everything for today.</p>
        </div>
    <?php else: ?>
        <div class="task-grid">
            <?php foreach ($tasks as $task): ?>
                <article class="task-card">
                    <div class="task-card-top">
                        <span class="task-number">
                            Task #<?= esc($task['id']) ?>
                        </span>

                        <span class="status status-<?= esc(str_replace(' ', '-', strtolower($task['status'])), 'attr') ?>">
                            <?= esc(ucfirst($task['status'])) ?>
                        </span>
                    </div>

                    <h3><?= esc($task['title']) ?></h3>

                    <p class="task-date">
                        Due <?= esc(date('F j, Y', strtotime($task['task_date']))) ?>
                    </p>
                </article>
            <?php endforeach ?>
        </div>
    <?php endif ?>
</section>

<?= $this->endSection() ?>