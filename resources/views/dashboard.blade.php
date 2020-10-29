@extends('layouts.main')

@section('heading', 'Dashboard')

@section('content')

    <div class="flex flex-wrap mb-4">
        <div class="sm:w-1/2">
            <div class="font-bold text-xl mb-2">Welcome to your dashboard</div>
            @if (Auth::user()->user_type === 'customer')
                Customer
            @else
                Producer
            @endif
        </div>
        <div class="sm:w-1/2">
            <div class="font-bold text-xl mb-2">Your account details</div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-name">
                        Name
                    </label>
                    <input class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" value="{{Auth::user()->name}}" readonly>
                </div>
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-email">
                        Email Address
                    </label>
                    <input class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" value="{{Auth::user()->email}}" readonly>
                </div>
            </div>
            @if (Auth::user()->user_type === 'customer')
                <div class="text-xl">Recently viewed producers</div>
                <table class="border-collapse border-gray-500 w-full">
                    <tbody>
                        <tr>
                            <td class="border border-gray-200 px-4 py-2">Indiana</td>
                        </tr>
                    </tbody>
                </table>
            @else
                <a href="{{route('producer.store.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Store manager
                </a>
            @endif
        </div>
    </div>

@endsection
