<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username'  => 'admin01',
                'full_name' => 'Renzo',
                'role'      => 'Administrator',
            ],
            [
                'username'  => 'cashier01',
                'full_name' => 'Miguel',
                'role'      => 'Cashier',
            ],
            [
                'username'  => 'cashier02',
                'full_name' => 'Reyes',
                'role'      => 'Cashier',
            ],
            [
                'username'  => 'manager01',
                'full_name' => 'Espino',
                'role'      => 'Manager',
            ],
            [
                'username'  => 'staff01',
                'full_name' => 'Lebron',
                'role'      => 'Staff',
            ],
        ];

        return view('users', ['users' => $users]);
    }
}