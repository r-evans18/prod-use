@extends('layouts.main')

@section('heading', 'Welcome to Prod-Use')

@section('content')

    <div class="row">
        <div class="col-md-6">
            <div class="font-bold text-xl mb-2">Bring local producers to you</div>
            <p>
                Brining all local producers right to your finger tips.
                Search by your postcode to see local producers and the food they have in stock straight away without any delays.
            </p>
            <p>
                Saving your hard earned cash along the way using our modern pricing system to find you the best deals, and where
                the higher pricing items are!
            </p>
            <p>
                Don't let people convince you they have the best deal, use <i>Prod-Use</i> to find them and the averages around.
                Great developments to come from <i>Prod-Use</i> in the near future, <a href="{{route('register')}}">create an account</a> to hear about them as soon
                as they are ready.
            </p>
        </div>
        <div class="col-md-6">
            <img class="rounded" src="https://designshack.net/wp-content/uploads/placeholder-image.png">
        </div>
    </div>

    <div class="row mt-12">
        <div class="col-md-12">
            <h1><center>Top 3 producers</center></h1>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <a href="{{ route('producer.view', ['id' => 1]) }}">
                        <div class="max-w-sm rounded overflow-hidden shadow-lg">
                            <img class="w-full" src="https://www.farmcrediteast.com/-/media/farm-credit-east/featured-images/Corn.ashx?h=351&la=en&w=609&hash=B4F59675EF68E081AE0A2D29572CADFE050B7FEA" alt="Sunset in the mountains">
                            <div class="px-6 py-2">
                                <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                                <p class="text-gray-700 text-base">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                </p>
                            </div>
                            <div class="px-6 pt-1 pb-2">
                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <img class="w-full" src="https://www.farmcrediteast.com/-/media/farm-credit-east/featured-images/Corn.ashx?h=351&la=en&w=609&hash=B4F59675EF68E081AE0A2D29572CADFE050B7FEA" alt="Sunset in the mountains">
                        <div class="px-6 py-2">
                            <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                            <p class="text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                        <div class="px-6 pt-1 pb-2">
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <img class="w-full" src="https://www.farmcrediteast.com/-/media/farm-credit-east/featured-images/Corn.ashx?h=351&la=en&w=609&hash=B4F59675EF68E081AE0A2D29572CADFE050B7FEA" alt="Sunset in the mountains">
                        <div class="px-6 py-2">
                            <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                            <p class="text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                        <div class="px-6 pt-1 pb-2">
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                        </div>
                    <div class="font-bold text-xl mb-2 mt-4">Are you a producer?</div>
                        <p>
                            Brining all local producers right to your finger tips.
                            Search by your postcode to see local producers and the food they have in stock straight away without any delays.
                        </p>
                        <a href="{{ route('register-producer.index') }}">Register your producer account</a>
                    </div>
                </div>
            </div>
            <center>
                <a class="btn btn-primary mt-4" href="{{ route('producer.index') }}">Find more near you!</a>
            </center>
        </div>
    </div>

@endsection
