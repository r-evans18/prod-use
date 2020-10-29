@extends('layouts.main')

@section('heading', 'My items')

@section('page-action')

    <a href="{{route('producer.item.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Add Item
    </a>

@endsection

@section('content')

    @if (sizeof($items) != 0)
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Category</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($items as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->category_id }}</td>
                    <td>&pound;{{ $item->price }}</td>
                    <td>
                        <a href="{{route('producer.item.edit', ['id' => $item->id])}}">Edit</a>
                        <a href="{{route('producer.item.delete', ['id' => $item->id])}}" class="text-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        There are no items to display.
    @endif

@endsection
