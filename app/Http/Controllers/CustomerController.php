<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            ['name' => 'Alice Cruz', 'email' => 'alice@example.com'],
            ['name' => 'Bob Santos', 'email' => 'bob@example.com'],
            ['name' => 'Carol Reyes', 'email' => 'carol@example.com'],
            ['name' => 'David Lim', 'email' => 'david@example.com'],
            ['name' => 'Eva Tan', 'email' => 'eva@example.com'],
        ];
        return view('customers', compact('customers'));
    }
}