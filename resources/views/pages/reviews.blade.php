@extends('main.main')

@section('title', 'Welcome to A and C Cars Chertsey Taxi')

@section('description', 'A and C Cars are based in Chertsey Surrey. We operate from Chertsey but we cover Surrey and Middlesex. We are reliable and fully licensed within Runnymede Council.')
@section('keywords', 'A and C Cars, Chertsey Taxi, Addlestone Taxi, Surrey Taxi, Runnymede Taxi')

@section('content')





    <div id="left_content" style="width: 774px;"><h2>Customer Reviews</h2>
        <p>We've had many great review over the years. Please check back to when we've updated
            our website to display these reviews.</p>
    </div>

    <div id="right_content">
        <p><h1>Contact Us</h1>
        @include('forms.main')</p>
    </div>
    <div class="clear" style="padding: 5px;"></div>

@endsection