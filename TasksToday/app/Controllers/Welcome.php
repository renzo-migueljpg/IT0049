<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Welcome extends BaseController
{
    public function index()
    {
        $taskModel = new TaskModel();

        return view('welcome', [
            'tasks' => $taskModel->getTodayTasks(),
        ]);
    }
}