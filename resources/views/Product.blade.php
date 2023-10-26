@extends('layouts.Header')
@section('container')
<h1 class="text-center">Halaman Product </h1>

<table class="table mt-3 ">
    <thead>
      <tr class="table-dark">
        <th scope="col ">No</th>
        <th scope="col">ID Barang</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Category</th>
        <th scope="col">jumlah stock</th>
        <th scope="col">Harga Barang</th>
        <th scope="col">Gambar Barang</th>
        <th scope="col">Action </th>
      </tr>
    </thead>
    <tbody>
        @foreach ($items as $item)
      <tr>
        <th scope="row">{{ $item['id'] }}</th>
        <td>{{ $item['id_barang'] }}</td>
        <td>{{ $item['nama_barang'] }}</td>
        <td>{{ $item->category->Category_name }}</td>
        <td>{{ $item['stok'] }}</td>
        <td>Rp.{{ number_format($item['harga'], 0, ',', '.') }}</td>

         <td> <img  style="width: 100px;" src="https://source.unsplash.com/1600x900/?{{ $item->category->Category_name }}" alt="Image"></td>
         <td>
          <div>
            <a class="btn btn-success" href=""><i class="bi bi-cart-plus"></i></a>
            <a style="color: white" class="btn btn-warning ml-2" href="/detailProduct/{{ $item->id_barang }}"><i class="bi bi-eye"></i></i></a>
          </div>
         </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
