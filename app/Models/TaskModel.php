<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\I18n\Time;

class TaskModel extends Model
{
    protected $table            = 'tasks';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = [
        'title',
        'status',
        'task_date',
        'created_at',
    ];

    protected $useTimestamps = false;

    public function getTodayTasks()
    {
        $today = Time::now('Asia/Manila')->toDateString();

        return $this->where('task_date', $today)
                    ->orderBy('id', 'ASC')
                    ->findAll();
    }

    public function getAllTasks()
    {
        return $this->orderBy('task_date', 'ASC')
                    ->orderBy('id', 'ASC')
                    ->findAll();
    }
}