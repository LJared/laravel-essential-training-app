<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()
    {   
        // Fetch users from database using different methods
        // 1. Using raw SQL query
        // $users = DB::select('SELECT * FROM users');
        // dd($users);

        // 2. Query builder
        // $users = DB::table('users')->select(['name', 'email'])->whereNotNull('email')->get();
        // dd($users);

        // 3. Eloquent ORM
        // $users = User::get();
        // dd($users);

        return view('welcome');
    }
}
