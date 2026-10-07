<?php

namespace App\Controllers;

use App\Models\TaskModel;

class TasksController extends BaseController
{
    public function index(): string
    {
        $taskModel = new TaskModel();

        $data = [
            'title' => 'All Tasks',
            'tasks' => $taskModel->getAllTasks(),
        ];

        return view('tasks', $data);
    }
}