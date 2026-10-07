<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="page-header">
    <p class="eyebrow">Account Information</p>
    <h1>User Profile</h1>
    <p>Information about the system's demonstration user.</p>
</section>

<?php if (empty($user)): ?>
    <div class="empty-state">
        <h3>No user found</h3>
        <p>The demonstration user is not available.</p>
    </div>
<?php else: ?>
    <section class="profile-card">
        <div class="profile-avatar">
            <?= esc(strtoupper(substr($user['full_name'], 0, 1))) ?>
        </div>

        <div class="profile-content">
            <p class="eyebrow">Demo User</p>
            <h2><?= esc($user['full_name']) ?></h2>

            <div class="profile-details">
                <div>
                    <span>User ID</span>
                    <strong><?= esc($user['id']) ?></strong>
                </div>

                <div>
                    <span>Username</span>
                    <strong>@<?= esc($user['username']) ?></strong>
                </div>

                <div>
                    <span>Email Address</span>
                    <strong><?= esc($user['email']) ?></strong>
                </div>

                <div>
                    <span>Account Created</span>
                    <strong>
                        <?= esc(date('F j, Y', strtotime($user['created_at']))) ?>
                    </strong>
                </div>
            </div>
        </div>
    </section>
<?php endif ?>

<?= $this->endSection() ?>