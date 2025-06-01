<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
{
    $users = User::all();
    $data = [
        'menu' => 'User',
        'submenu' => 'Home',
        'page' => 'user.index',
        'users' => $users,
        'title' => 'User'
    ]; // atau bisa gunakan paginate: User::paginate(10)
    return view('template', $data);
}
}
