<?php

namespace App\Controllers;

use App\Models\TaskModel;
use CodeIgniter\I18n\Time;

class Home extends BaseController
{
    public function index(): string
    {
        $taskModel = new TaskModel();

        $data = [
            'title' => "Today's Tasks",
            'tasks' => $taskModel->getTodayTasks(),
            'today' => Time::now('Asia/Manila')->format('F j, Y'),
        ];

        return view('home', $data);
    }
}