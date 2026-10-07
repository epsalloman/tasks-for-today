<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TasksForTodaySeeder extends Seeder
{
    public function run()
    {
        $now = new \DateTimeImmutable(
            'now',
            new \DateTimeZone('Asia/Manila')
        );

        $today     = $now->format('Y-m-d');
        $yesterday = $now->modify('-1 day')->format('Y-m-d');
        $tomorrow  = $now->modify('+1 day')->format('Y-m-d');
        $createdAt = $now->format('Y-m-d H:i:s');

        $tasks = [
            [
                'title'      => 'Review project requirements',
                'status'     => 'completed',
                'task_date'  => $yesterday,
                'created_at' => $createdAt,
            ],
            [
                'title'      => 'Prepare database structure',
                'status'     => 'completed',
                'task_date'  => $yesterday,
                'created_at' => $createdAt,
            ],
            [
                'title'      => 'Create migration files',
                'status'     => 'completed',
                'task_date'  => $yesterday,
                'created_at' => $createdAt,
            ],
            [
                'title'      => 'Build the welcome page',
                'status'     => 'pending',
                'task_date'  => $today,
                'created_at' => $createdAt,
            ],
            [
                'title'      => 'Create the task list page',
                'status'     => 'in progress',
                'task_date'  => $today,
                'created_at' => $createdAt,
            ],
            [
                'title'      => 'Test database connection',
                'status'     => 'completed',
                'task_date'  => $today,
                'created_at' => $createdAt,
            ],
            [
                'title'      => 'Create the profile page',
                'status'     => 'pending',
                'task_date'  => $tomorrow,
                'created_at' => $createdAt,
            ],
            [
                'title'      => 'Upload the project to GitHub',
                'status'     => 'pending',
                'task_date'  => $tomorrow,
                'created_at' => $createdAt,
            ],
        ];

        $user = [
            'username'   => 'enoch',
            'full_name'  => 'Enoch Paul Salloman',
            'email'      => 'enoch@example.com',
            'created_at' => $createdAt,
        ];

        // Keeps exactly eight tasks and one demo user when rerun.
        $this->db->table('tasks')->truncate();
        $this->db->table('users')->truncate();

        $this->db->table('tasks')->insertBatch($tasks);
        $this->db->table('users')->insert($user);
    }
}