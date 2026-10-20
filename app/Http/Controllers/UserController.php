<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['id' => 1, 'name' => 'Admin One', 'email' => 'admin@example.com', 'role' => 'Administrator', 'status' => 'Active'],
            ['id' => 2, 'name' => 'Maria Lopez', 'email' => 'maria@example.com', 'role' => 'Cashier', 'status' => 'Active'],
            ['id' => 3, 'name' => 'James Tan', 'email' => 'james@example.com', 'role' => 'Cashier', 'status' => 'Active'],
            ['id' => 4, 'name' => 'Nicole Ramos', 'email' => 'nicole@example.com', 'role' => 'Manager', 'status' => 'Active'],
            ['id' => 5, 'name' => 'Paolo Mendoza', 'email' => 'paolo@example.com', 'role' => 'Staff', 'status' => 'Inactive'],
        ];
        return view('users', compact('users'));
    }
}
