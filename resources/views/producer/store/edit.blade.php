@extends('layouts.main')

@section('heading', 'Edit Store')

@section('content')

    <form class="w-full max-w-lg" action="{{route('producer.store.edit-submit', ['id' => $store->id])}}">
        {{ @csrf_field() }}
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                    Name
                </label>
                <input class="block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight" name="name" type="text" placeholder="Name..." value="{{$store->name}}" required>
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="address_1">
                    Address 1
                </label>
                <input class="block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight" name="address_1" type="text" placeholder="Address 1..." value="{{$store->address_1}}" required>
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="address_2">
                    Address 2
                </label>
                <input class="block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight" name="address_2" type="text" placeholder="Address 2..." value="{{$store->address_2}}" required>
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="country">
                    Country
                </label>
                <input class="block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight" name="country" type="text" placeholder="Country..." value="{{$store->country}}" required>
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="city">
                    City
                </label>
                <input class="block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight" name="city" type="text" placeholder="City..." value="{{$store->city}}" required>
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="postcode">
                    Postcode
                </label>
                <input class="block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight" name="postcode" type="text" placeholder="Postcode..." value="{{$store->postcode}}" required>
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="telephone">
                    Telephone
                </label>
                <input class="block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight" name="telephone" type="text" placeholder="Telephone..." value="{{$store->telephone}}" required>
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 mt-6">
            <div class="w-full px-3 mb-6 md:mb-0">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save store</button>
            </div>
        </div>
    </form>

@endsection
