<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Item;

class ItemController extends Controller
{
    public function index(Request $request) {
        $items = Item::filter($request->all())->sortable()->paginate(10);
        return view('items',['items'=>$items]);
    }
}
