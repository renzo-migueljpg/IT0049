<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username'  => 'admin101',
                'full_name' => 'Renzo',
                'role'      => 'Administrator',
            ],
            [
                'username'  => 'cashier101',
                'full_name' => 'Miguel',
                'role'      => 'Cashier',
            ],
            [
                'username'  => 'cashier101',
                'full_name' => 'Reyes',
                'role'      => 'Cashier',
            ],
            [
                'username'  => 'manager101',
                'full_name' => 'Espino',
                'role'      => 'Manager',
            ],
            [
                'username'  => 'staff101',
                'full_name' => 'Lebron',
                'role'      => 'Staff',
            ],
        ];

        return view('users', ['users' => $users]);
    }
}