<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // ini untuk menampilkan halaman utama
        // jika admin sudah login, maka akan diarahkan ke halaman utama
        return view('admin.index');
    }
}
