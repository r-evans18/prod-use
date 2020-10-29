@extends('layouts.main')

@section('heading', 'Producer list')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="row">
                @foreach($stores as $store)
                    <div class="col-md-4">
                        <a href="{{ route('producer.view', ['id' => $store->id]) }}">
                            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                                <img class="w-full" src="https://www.farmcrediteast.com/-/media/farm-credit-east/featured-images/Corn.ashx?h=351&la=en&w=609&hash=B4F59675EF68E081AE0A2D29572CADFE050B7FEA" alt="Sunset in the mountains">
                                <div class="px-6 py-2">
                                    <div class="font-bold text-xl mb-2">{{ $store->name }}</div>
                                    <p class="text-gray-700 text-base">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                    </p>
                                </div>
                                <div class="px-6 pt-1 pb-2">
                                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
