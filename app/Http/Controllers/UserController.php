<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // ini untuk menampilkan halaman utama
        // jika user sudah login, maka akan diarahkan ke halaman utama
        return view('user.index');
    }
}
