<?php

namespace App\Http\Controllers;
use\App\Models\Produk;
use\App\Models\Kategori;
use Illuminate\Http\Request;
use Redirect;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $batas = 5;
        $produk = Produk::join('kategori', 'kategori.id_kategori', '=', 'produk.id_kategori')
            ->orderBy('produk.id_produk', 'desc')
            ->paginate($batas);
        $no = $batas * ($produk->currentPage() - 1);
        return view('produk.index', compact('produk', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
