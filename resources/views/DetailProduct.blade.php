@extends('layouts.Header')
@section('container')

<div class="container-fluid ">
  {{--  button container --}}
  <div class="row m-1">
    <h1 class="text-center">{{ $title }}</h1>
    <div class="col-md-5 mb-3">
      <a class="btn btn-success" href="/product"><i class="bi bi-arrow-left"></i> back</a>
      <a class="btn btn-primary" href="/product"><i class="bi bi-cart-plus"></i> Buy now</a>
    </div>
  </div>
  {{-- button container --}}
    <div class="row m-auto">
      {{-- untuk menampilkan deskripsi barang --}}
        <div class="ffset-md-1 col-lg-4">
           <img class="img-fluid" src="https://source.unsplash.com/1600x900/?{{ $item->category->Category_name }}" alt="">
        </div>
        <div class="col-lg-7">
          <div class="ms-3">
            <p><b>Kode Product</b>   : {{ $item->id_barang }}</p>
            <p><b>Nama Product</b>   : {{ $item->nama_barang }}</p>
            <p><b>Category</b>       :{{ $item->Category->Category_name }} </p>
            <p><b>Harga Barang</b>   :Rp.{{ number_format($item['harga'], 0, ',', '.') }}</p>
            <p><b>jumlah Product</b> :{{ $item->stok }}</p>
          </div>
        </div>
    </div>
    <div class="mt-3">
    {{ $item->Deskripsi }}
    </div>
    {{-- akhir menampilkan deskrpsi barang --}}
</div>

@endsection
