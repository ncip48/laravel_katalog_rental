<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\ProdukController;
use App\Models\Site;
use App\Models\Produk;
use App\Models\Slider;

class ReservasiController extends Controller
{
    public function index()
    {
        //get gedung all ~> (SELECT * FROM gedung)
        $produks = Produk::all();
        $produks = $produks->map(function ($item) {
            $item['transmisi_name'] = ProdukController::transmisi($item->transmisi);

            return $item;
        });
        $site = Site::first();
        $site->phone_wa = preg_replace('/0/', '62', $site->phone, 1);
        $sliders = Slider::all();
        //ini di file resources/views/home.blade.php
        //compact ngebawa parameter contone parameter $gedung dilempar ke view home.blade.php
        //jadi nanti di home.blade.php kita bisa mengambil data gedung dari $gedung
        return view('home', compact('produks', 'site', 'sliders'));
    }
}
