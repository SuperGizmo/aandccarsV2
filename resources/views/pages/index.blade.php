@extends('main.main')

@section('title', 'Welcome to A and C Cars Chertsey Taxi')

@section('description', 'A and C Cars are based in Chertsey Surrey. We operate from Chertsey but we cover Surrey and Middlesex. We are reliable and fully licensed within Runnymede Council.')

@section('keywords', 'A and C Cars, Chertsey Taxi, Addlestone Taxi, Surrey Taxi, Runnymede Taxi')

@section('content')
        <div id="left_content" style="width: 774px;">
            <h1>Welcome to A &amp; C Cars</h1>
            <ul>
                <li>Fully licensed operator with Runnymede Borough Council.</li>
                <li>Experienced and courteous drivers, all vehicles registered and metered.</li>
                <li>Competitive rates.</li>
                <li>Airport specialists with a Meet &amp; Greet service available, arrival and departure times monitored.</li>
                <li>Company accounts welcome.</li>
                <li>An affordable and reliable taxi service.</li>
                <li>All local areas covered.</li>
            </ul>
            <h2>Our Office is open from:</h2>
            <ul>
                <li><span>06:30hr until 00:00hr &ndash; Monday to Thursday.</span></li>
                <li><span>06:30hr until 02:00hr &ndash; Friday and Saturday.</span></li>
                <li><span>08:00hr until 0:00hr &ndash; Sunday</span></li>
            </ul>
            <p>Pre-bookings can be made should your requirements fall out of office hours.</p>
        </div>
        <div id="right_content">
            <p><h1>Contact Us</h1>
            @include('forms.main')
            </p>
        </div>
        <div class="clear" style="padding: 5px;"></div>

@endsection
