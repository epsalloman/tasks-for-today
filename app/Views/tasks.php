<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="page-header">
    <p class="eyebrow">Complete Schedule</p>
    <h1>All Tasks</h1>
    <p>View every task arranged according to its scheduled date.</p>
</section>

<section class="table-card">
    <?php if (empty($tasks)): ?>
        <div class="empty-state">
            <h3>No tasks available</h3>
            <p>The task list is currently empty.</p>
        </div>
    <?php else: ?>
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Task Title</th>
                        <th>Status</th>
                        <th>Task Date</th>
                        <th>Created</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($tasks as $task): ?>
                        <tr>
                            <td><?= esc($task['id']) ?></td>

                            <td class="task-title">
                                <?= esc($task['title']) ?>
                            </td>

                            <td>
                                <span class="status status-<?= esc(str_replace(' ', '-', strtolower($task['status'])), 'attr') ?>">
                                    <?= esc(ucfirst($task['status'])) ?>
                                </span>
                            </td>

                            <td>
                                <?= esc(date('F j, Y', strtotime($task['task_date']))) ?>
                            </td>

                            <td>
                                <?= esc(date('F j, Y g:i A', strtotime($task['created_at']))) ?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    <?php endif ?>
</section>

<?= $this->endSection() ?>