<?php

namespace App\Controllers;

use App\Models\UserModel;

class ProfileController extends BaseController
{
    public function index(): string
    {
        $userModel = new UserModel();

        $data = [
            'title' => 'User Profile',
            'user'  => $userModel->getDemoUser(),
        ];

        return view('profile', $data);
    }
}