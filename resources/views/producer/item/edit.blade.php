@extends('layouts.main')

@section('heading', 'Edit Item')

@section('content')

    <form class="w-full max-w-lg" action="{{route('producer.item.edit-submit', ['id' => $item->id])}}">
        {{ @csrf_field() }}
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="itemName">
                    Item name
                </label>
                <input class="block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight" name="itemName" type="text" value="{{$item->name}}" required>
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="itemPrice">
                    Item Price
                </label>
                <input class="block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight" name="itemPrice" type="money" value="{{$item->price}}" required>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="itemDescription">
                    Description
                </label>
                <textarea class="block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight"
                          name="itemDescription" required>{{$item->description}}"</textarea>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-2">
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="itemCategory">
                    Item Category
                </label>
                <div class="relative">
                    <select class="block appearance-none w-full border text-gray-700 py-3 px-4 pr-8 rounded leading-tight" name="itemCategory" required>
                        <option>Please select...</option>
                        <option value="1">Food</option>
                        <option value="2">Drink</option>
                        <option value="3">Other</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mt-6">
            <div class="w-full px-3 mb-6 md:mb-0">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save item</button>
            </div>
        </div>
    </form>

@endsection
