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
}
