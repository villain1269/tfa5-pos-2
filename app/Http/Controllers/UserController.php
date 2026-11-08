<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['username' => 'admin', 'role' => 'Administrator'],
            ['username' => 'cashier1', 'role' => 'Cashier'],
            ['username' => 'cashier2', 'role' => 'Cashier'],
            ['username' => 'manager', 'role' => 'Manager'],
            ['username' => 'stock', 'role' => 'Inventory'],
        ];
        return view('users', compact('users'));
    }
}