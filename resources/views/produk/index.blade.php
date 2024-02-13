<?php
use App\Models\Produk;

$produk = Produk::all();
?>
<!DOCTYPE html>
@section('content')
    <div class	=	"container">
        <div class	=	"row">
            <div class=	"col-md-12">
                <div class=	"panel	panel-default">
                    <div class	=	"panel-heading">
                        <h4>Daftar Produk
                            {{-- <a href	="{{ route('produk.create') }}" class	=	"btn	btn-success	pull-right"
                                style	=	"margin-top:	-8px"> Tambah </a><br> --}}
                        </h4>
                    </div>
                    <div class=	"panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Kategori</th>
                                    <th>Harga Jual</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produk as $data)
                                    <tr>
                                        <td>{{ ++$data->no }} </td>
                                        <td>{{ $data->nama_produk }} </td>
                                        <td>{{ $data->nama_kategori }} </td>
                                        <td>{{ $data->harga_jual }} </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
