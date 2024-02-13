<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/produk/all', function () {
//     $produk = App\Models\Produk::all();
//     foreach ($produk as $data){
//         echo $data->id_produk.".".
//         $data->nama_produk."-"	.
//         $data->harga_jual."<br>";
//     }
// });

// Route::get('/produk/add', function () {
//     $produk = new App\Models\Produk;
//     $produk	->	nama_produk	=	"Gayung";
//     $produk	->	harga_jual	=	15000;
//     $produk	->	save();
// });

// Route::get('/produk/update', function () {
//     $produk	=	App\Models\Produk::find(3);
//     $produk	->	harga_jual	=	8000;
//     $produk	->	update();
// });

// Route::get('/produk/delete', function () {
//     $produk	=	App\Models\Produk::find(3);
//     $produk	->	delete();
// });

Route::get('/index', function () {
    return view('index');
});

Route::get('kategori',	function(){
    $kategori=App\Models\Kategori::where('id_kategori',	'=',	3)	->first();
    echo	"Produk	untuk	kategori	".	$kategori	->	nama_kategori.":";
    foreach($kategori->produk	as	$data){
            echo	"<li>".	$data->nama_produk	.	"</li>";
    }
});

Route::get('/produk/index', function () {
    return view('produk.index');
});
