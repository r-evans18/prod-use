<?php

namespace App\Http\Controllers\Producer;

use App\Helpers\PostcodeHelper;
use App\Models\ProducerItem;
use App\Models\ProducerLocation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function index()
    {
        $stores = ProducerLocation::where('producer_id', Auth::user()->id)->get();
        return view('producer.store.index', compact('stores'));
    }

    public function create()
    {
        return view('producer.store.create');
    }

    public function edit($storeID)
    {
        $store = ProducerLocation::find($storeID);
        return view('producer.store.edit', compact('store'));
    }

    public function store(Request $request)
    {
        $postcodeDetails = PostcodeHelper::getPostcodeDetails($request->input('postcode'));
        $store = New ProducerLocation();
        $store->producer_id = Auth::user()->id;
        $store->name = $request->input('name');
        $store->address_1 = $request->input('address_1');
        $store->address_2 = $request->input('address_2');
        $store->country = $request->input('country');
        $store->city = $request->input('city');
        $store->postcode = $request->input('postcode');
        $store->telephone = $request->input('telephone');
        $store->latitude = $postcodeDetails['latitude'];
        $store->longitude = $postcodeDetails['longitude'];

        if ($store->save()) {
            return redirect()->route('producer.store.index')->with('success', $request->input('name')
                . ' has been created successfully');
        } else {
            return redirect()->back()->with('warning', 'There has been an error creating your store');
        }
    }

    public function editSubmit(Request $request, $storeID)
    {
        $postcodeDetails = PostcodeHelper::getPostcodeDetails($request->input('postcode'));
        $store = ProducerLocation::find($storeID);
        $store->producer_id = Auth::user()->id;
        $store->name = $request->input('name');
        $store->address_1 = $request->input('address_1');
        $store->address_2 = $request->input('address_2');
        $store->country = $request->input('country');
        $store->city = $request->input('city');
        $store->postcode = $request->input('postcode');
        $store->telephone = $request->input('telephone');
        $store->latitude = $postcodeDetails['latitude'];
        $store->longitude = $postcodeDetails['longitude'];

        if ($store->save()) {
            return redirect()->route('producer.store.index')->with('success', $request->input('name')
                . ' has been edited successfully');
        } else {
            return redirect()->back()->with('warning', 'There has been an error editing your store');
        }
    }

    public function delete($storeID) {
        $store = ProducerLocation::find($storeID);
        if ($store->producer_id == Auth::user()->id) {
            $store->delete();
            return redirect()->back()->with('success', 'Store deleted');
        } else {
            return redirect()->back()->with('warning', 'Unable to find store');
        }
    }

    public function items($id)
    {
        $items = ProducerItem::where('store_id', $id)->get();
        return view('producer.item.index', compact('items'));
    }
}
