<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // ini untuk menampilkan halaman utama
        // jika admin sudah login, maka akan diarahkan ke halaman utama
        return view('admin.index');
    }

    public function brands()
    {
        // ini untuk menampilkan halaman daftar brand
        // ambil data brand dari database, urutkan berdasarkan id secara menurun, dan batasi 10 per halaman
        $brands = Brand::orderBy('id', 'DESC')->paginate(10);

        // kirim data brand ke view, dengan nama variabel 'brands'
        return view('admin.brands', compact('brands'));
    }
}
