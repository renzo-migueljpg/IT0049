<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            [
                'full_name' => 'Renzo Miguel Espino',
                'email' => 'renzo@example.com',
                'phone' => '123-456-7890',
            ], 
            [
                'full_name' => 'Spongebob Squarepants',
                'email' => 'spongebob@example.com',
                'phone' => '123-456-7890',
            ],
            [
                'full_name' => 'Patrick Star',
                'email' => 'patrick@example.com',
                'phone' => '123-456-7890',
            ],
            [
                'full_name' => 'Squidward Tentacles',
                'email' => 'squidward@example.com',
                'phone' => '123-456-7890',
            ], 
            [
                'full_name' => 'Sandy Cheeks',
                'email' => 'sandy@example.com',
                'phone' => '123-456-7890',
            ], 

             ];

        return view('customers', ['customers' => $customers]);
    }
}