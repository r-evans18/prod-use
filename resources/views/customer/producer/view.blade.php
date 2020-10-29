@extends('layouts.main')

@section('heading')
    <a class="back-link tip" title="Go Back" href="{{route('producer.index')}}">
        <svg class="fill-current text-teal-500 inline-block h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M18 9.87V20H2V9.87a4.25 4.25 0 0 0 3-.38V14h10V9.5a4.26 4.26 0 0 0 3 .37zM3 0h4l-.67 6.03A3.43 3.43 0 0 1 3 9C1.34 9 .42 7.73.95 6.15L3 0zm5 0h4l.7 6.3c.17 1.5-.91 2.7-2.42 2.7h-.56A2.38 2.38 0 0 1 7.3 6.3L8 0zm5 0h4l2.05 6.15C19.58 7.73 18.65 9 17 9a3.42 3.42 0 0 1-3.33-2.97L13 0z"/>
        </svg>
    </a>Producer {{ $store->name }}
@endsection

@section('content')

    <div class="row">
        <div class="col-md-6">
            <img class="rounded" src="https://designshack.net/wp-content/uploads/placeholder-image.png">
        </div>
        <div class="col-md-6">
            <h2>{{ $store->name }}</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a href="{{route('producer.follow', ['id' => $store->id])}}" class="btn btn-primary float-right mt-2">Follow Producer</a>
            <a href="{{ route('producer.items', ['id' => $store->id]) }}" class="btn btn-secondary float-right mt-2 mr-2">View Items</a>
        </div>
    </div>

@endsection
