<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gedung;
use App\Models\Produk;

class ProdukController extends Controller
{
    public static function transmisi($value)
    {
        switch ($value) {
            case 0:
                return "Otomatis";
                break;
            case 1:
                return "Manual";
                break;
            case 2:
                return "Hybrid";
                break;
            case 3:
                return "Listrik";
                break;
            default:
                return '-';
                break;
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $produks = Produk::when($request->input('name'), function ($query, $name) {
            return $query->where('nama', 'like', '%' . $name . '%');
        })
            ->select('*')
            ->paginate(10);

        foreach ($produks as $produk) {
            $produk['transmisi_name'] = $this->transmisi($produk->transmisi);
        }
        return view('admin.produk.index', compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.produk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fileimage = $request->file('foto');
        $nameimage = time() . '.' . $fileimage->getClientOriginalExtension();
        $fileimage->move(public_path('img/produk'), $nameimage);

        $fullPathUriImage = $nameimage;

        Produk::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'foto' => $fullPathUriImage,
            'harga' => $request->harga,
            'model' => $request->model,
            'transmisi' => $request->transmisi,
            'status' => $request->status,
        ]);
        return redirect(route('produk.index'))->with('success', 'Produk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {
        return view('admin.produk.edit')->with('produk', $produk);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $produk)
    {
        $input = $request->all();
        if ($image = $request->file('foto')) {
            $fileimage = $request->file('foto');
            $nameimage = time() . '.' . $fileimage->getClientOriginalExtension();
            $fileimage->move(public_path('img/produk'), $nameimage);

            $fullPathUriImage = $nameimage;
            $input['foto'] = "$fullPathUriImage";
        } else {
            unset($input['foto']);
        }

        $produk->update($input);
        return redirect()->route('produk.index')->with('success', 'Produk berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {
        $produk->delete();
        return redirect()->route('produk.index')->with('success', 'Produk berhasil dihapus');
    }
}
