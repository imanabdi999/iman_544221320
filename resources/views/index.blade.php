<?php
use App\Models\Produk;

$produk = Produk::all();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2> Daftar Produk </h2>
    <table border 	=	"1" cellspacing	="0" width="100%">
        <tr>
            <th>ID</th>
            <th> Nama Produk</th>
            <th>Harga</th>
        </tr>
        @foreach ($produk as $data)
            <tr>
                <td>{{ $data->id_produk }} </td>
                <td>{{ $data->nama_produk }} </td>
                <td>{{ $data->harga_jual }} </td>
            </tr>
        @endforeach
</body>

</html>
