@extends('main.main')

@section('title', 'Welcome to A and C Cars Chertsey Taxi')

@section('description', 'A and C Cars are based in Chertsey Surrey. We operate from Chertsey but we cover Surrey and Middlesex. We are reliable and fully licensed within Runnymede Council.')
@section('keywords', 'A and C Cars, Chertsey Taxi, Addlestone Taxi, Surrey Taxi, Runnymede Taxi')

@section('content')





    <div id="left_content" style="width: 774px;"><h1>Keep Safe Information</h1>
        <p>A &amp; C Cars are a fully licensed and Insured Taxi operator. We take the safety of our customers seriously and to that end have issued a few guidelines to anyone taking a private hire vehicle anywhere.</p>
        <p>Firstly, whatever company you choose make sure they are Licensed with their Local Authority. Any vehicles you hire should be displaying a current and numbered plate or badge and the driver of the vehicle will also have a valid photo ID badge both issued and showing the local authority they work in.</p>
        <p>Private Hire sometimes also known as minicabs are vehicles who should be licensed by a local authority and display its licenes plate. In the case of A &amp; C Cars all drivers will have a valid photo ID badge and a fare chart showing upto date prices and have a meter fitted. These vehicles cannot be hailed in the street and must be pre-booked with the operating company beforehand.</p>
        <h2>SAFETY TIP</h2>
        <p><span style="color: #ff0000;">Always check that any Taxi you hire has a valid license plate displayed, make a note of the number before you get in. Takes just a few moments.</span></p>
    </div>

    <div id="right_content">
        <p><h1>Contact Us</h1>
        @include('forms.main')
        </p>
    </div>
    <div class="clear" style="padding: 5px;"></div>


@endsection