<?php

namespace App\Http\Controllers;

use App\Models\Item;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(){
        return view('product',[
            'title'=> "Product",
            'items'=>Item::all()
        ]);
    }

    public function show(Item $item){
      return view('DetailProduct',[
        "title" => "detail product Page",
        "item"=>$item
      ]);
}

public function showForm(Item $item){
  return view('FormTransaction',[
    "title" => "Form Transaction Product",
    "item"=>$item
  ]);
}

public function quantity($id_barang) {
  $item = Item::with('category')->where('id_barang', $id_barang)->first();
  return response()->json([
      'status' => 200,
      'item' => $item,
  ]);
}





}
