<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;
use App\Models\Reservasi;
use Carbon\Carbon;

class HomeController extends Controller
{

    public function index()
    {
        $produk = Produk::count();
        return view('admin.home', compact('produk'));
    }
}
