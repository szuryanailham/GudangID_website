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
            <button value="{{ $item['id_barang'] }}" type="button"  class="btn btn-success Order-Button">
              <i class="bi bi-cart-plus"></i>
            </button>
            <a style="color: white" class="btn btn-warning ml-2" href="/detailProduct/{{ $item->id_barang }}"><i class="bi bi-eye"></i></a>
          </div>
         </td>
      </tr>
      @endforeach
    </tbody>
  </table>
{{-- modal order --}}
<div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Card Order</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      {{--  isi modal --}}
      <form action="{{ url('formOrder') }}" method="POST">
        {{-- id barang --}}
        <div class="mb-3">
          <input type="text" class="form-control" id="id_barang" hidden>
        </div>
        {{-- nama_barang --}}
        <div class="mb-3">
          <label for="Nama_barang" class="form-label">Nama barang</label>
          <input type="text" class="form-control" id="nama_barang" readonly>
        </div>
          {{-- Category_barang --}}
          <div class="mb-3">
            <label for="Category" class="form-label">Category barang</label>
            <input type="text" class="form-control" id="Category">
          </div>
              {{-- Category_barang --}}
              <div class="mb-3">
                <label for="quantity" class="form-label">jumlah order</label>
                <input style="width: 80px" type="number" class="form-control" id="quantity">
              </div>
      </div>
      <div class="modal-footer">
        {{-- button modal --}}
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success"> Order <i class="bi bi-cart-plus-fill"></i></button>
      </form>
       {{-- akhir modal --}}
      </div>
    </div>
  </div>
</div>
{{-- end modal order --}}

<script>
  $(document).ready(function(){
    $(document).on('click','.Order-Button',function(){
      var id_barang = $(this).val(); 
      $('#idBarang').text(id_barang);
      $('#showModal').modal('show')
      $.ajax({
    type: "GET",
    url: "/formOrder/" + id_barang,
    success: function(response) {
      console.log(response)
        $('#nama_barang').val(response.item.nama_barang);
        $('#Category').val(response.item.category.Category_name);
    }
});
    })
  })
</script>

@endsection
