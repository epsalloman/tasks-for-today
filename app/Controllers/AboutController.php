<?php

namespace App\Controllers;

class AboutController extends BaseController
{
    public function index(): string
    {
        $data = [
            'title'     => 'About',
            'developer' => 'Enoch Paul Salloman',
            'project'   => 'Tasks for Today Management System',
            'framework' => 'CodeIgniter 4',
        ];

        return view('about', $data);
    }
}