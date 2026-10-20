<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            ['id' => 1, 'name' => 'Andrea Santos', 'email' => 'andrea@example.com', 'phone' => '09171234567', 'status' => 'Active'],
            ['id' => 2, 'name' => 'Miguel Reyes', 'email' => 'miguel@example.com', 'phone' => '09181234567', 'status' => 'Active'],
            ['id' => 3, 'name' => 'Sofia Cruz', 'email' => 'sofia@example.com', 'phone' => '09191234567', 'status' => 'Inactive'],
            ['id' => 4, 'name' => 'Daniel Garcia', 'email' => 'daniel@example.com', 'phone' => '09201234567', 'status' => 'Active'],
            ['id' => 5, 'name' => 'Isabella Lim', 'email' => 'isabella@example.com', 'phone' => '09211234567', 'status' => 'Active'],
        ];
        return view('customers', compact('customers'));
    }
}
