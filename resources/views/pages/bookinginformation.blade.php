@extends('main.main')

@section('title', 'Welcome to A and C Cars Chertsey Taxi')

@section('description', 'A and C Cars are based in Chertsey Surrey. We operate from Chertsey but we cover Surrey and Middlesex. We are reliable and fully licensed within Runnymede Council.')
@section('keywords', 'A and C Cars, Chertsey Taxi, Addlestone Taxi, Surrey Taxi, Runnymede Taxi')

@section('content')





    <div id="left_content" style="width: 774px;"><h1>Booking Information</h1>
        <p>By pre-booking you are guaranteed your allocated time.</p>
        <p>Please provide the following information when booking:</p>
        <ul>
            <li>Passenger's name.</li>
            <li>Contact telephone number.</li>
            <li>Pick-up address.</li>
            <li>Pick-up time.</li>
            <li>Flight details (if applicable).</li>
            <li>Destination address.</li>
            <li>Number of passengers.</li>
            <li>Amount of luggage.</li>
            <li>Special requirements.</li>
            <li>Credit card payment required please state at time of booking.</li>
        </ul>
    </div>

    <div id="right_content">
        <p><h1>Contact Us</h1>
        @include('forms.main')
        </p>
    </div>
    <div class="clear" style="padding: 5px;"></div>


@endsection