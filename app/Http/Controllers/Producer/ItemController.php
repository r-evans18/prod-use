<?php

namespace App\Http\Controllers\Producer;

use App\Models\ProducerItem;
use App\Models\ProducerLocation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    public function index() {
        $items = ProducerItem::where('producer_id', Auth::user()->id)->get();
        return view('producer.item.index', compact('items'));
    }

    public function create() {
        $stores = ProducerLocation::where('producer_id', Auth::user()->id)->get();
        return view('producer.item.create', compact('stores'));
    }

    public function delete($itemID) {
        $item = ProducerItem::find($itemID);
        if ($item->producer_id == Auth::user()->id) {
            $item->delete();
            return redirect()->back()->with('success', 'Item deleted');
        } else {
            return redirect()->back()->with('warning', 'Unable to find item');
        }
    }

    public function store(Request $request) {
        $item = new ProducerItem();
        $item->name = $request->input('itemName');
        $item->price = $request->input('itemPrice');
        $item->description = $request->input('itemDescription');
        $item->category_id = $request->input('itemCategory');
        $item->store_id = $request->input('storeID');
        $item->producer_id = Auth::user()->id;
        $item->save();
        return redirect()->route('producer.item.index')->with('success', 'Item created successfully');
    }

    public function edit($id) {
        $item = ProducerItem::where('producer_id', Auth::user()->id)->where('id', $id)->first();
        if ($item) {
            return view('producer.item.edit', compact('item'));
        } else {
            return redirect()->back()->with('warning', 'No item found');
        }
    }

    public function editSubmit(Request $request, $id) {
        $item = ProducerItem::find($id);
        $item->name = $request->input('itemName');
        $item->price = $request->input('itemPrice');
        $item->description = $request->input('itemDescription');
        $item->category_id = $request->input('itemCategory');
        $item->producer_id = Auth::user()->id;
        $item->save();
        return redirect()->route('producer.item.index')->with('success', 'Item edited successfully');
    }
}
