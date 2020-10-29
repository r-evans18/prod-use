@extends('layouts.main')

@section('heading', 'My stores')

@section('page-action')

    <a href="{{route('producer.store.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Add Store
    </a>

@endsection

@section('content')

    @if (sizeof($stores) != 0)
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach($stores as $store)
                    <tr>
                        <td>{{ $store->name }}</td>
                        <td>{{ $store->address_1 }}, {{ $store->address_2 }}</td>
                        <td>
                            <a href="{{route('producer.store.edit', ['id' => $store->id])}}">Edit</a>
                            <a href="{{route('producer.store.item', ['id' => $store->id])}}" class="text-info">Items</a>
                            <a href="{{route('producer.store.delete', ['id' => $store->id])}}" class="text-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        There are no stores to display.
    @endif

@endsection
