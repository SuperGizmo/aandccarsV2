@extends('main.main')

@section('title', 'Welcome to A and C Cars Chertsey Taxi')

@section('description', 'A and C Cars are based in Chertsey Surrey. We operate from Chertsey but we cover Surrey and Middlesex. We are reliable and fully licensed within Runnymede Council.')
@section('keywords', 'A and C Cars, Chertsey Taxi, Addlestone Taxi, Surrey Taxi, Runnymede Taxi')

@section('content')





    <div id="left_content" style="width: 774px;"><h1>Payment Options</h1>
        <p><span><span>We offer account facilities to business customers, to open an account please complete an application form (available upon request).</span></span></p>
        <h2><span><span><strong><span style="text-decoration: underline;">Account Facilities</span></strong></span></span></h2>
        <ul>
            <li><span><span>Journeys can be charged to an authorized account facility by prior arrangement with A &amp; C Cars, a purchase order no. is required for all bookings.</span></span></li>
            <li><span><span>All credit accounts are billed on a monthly basis.</span></span></li>
            <li><span><span>Credit terms are 30 days from date of invoice.</span></span></li>
            <li><span><span>Method of payment:&nbsp; Company cheques to be made payable to A &amp; C Cars, for direct transfer payment account details available on request.</span></span></li>
            <li><span><span>Late payment &ndash; we reserve the right to put accounts on &lsquo;stop' if invoices are not settled as per our credit terms, unless prior arrangement is made.</span></span></li>
            <li><span><span>A 10% surcharge is added to the final invoice for all company accounts.</span></span><span><span>&nbsp;</span></span></li>
        </ul>
        <h2><span><span><strong><span style="text-decoration: underline;">Cash Payments</span></strong></span></span></h2>
        <ul>
            <li><span><span>Journeys can be paid for by cash, we accept £GBP only.</span></span></li>
        </ul>
        <h2><span><span><strong><span style="text-decoration: underline;">Credit Card Payments</span></strong></span></span></h2>
        <ul>
            <li><span><span>All major credit cards accepted, please ensure payment terms are stated when booking.</span></span></li>
        </ul>
        <p><span><span>&nbsp;</span></span></p>
    </div>

    <div id="right_content">
        <p><h1>Contact Us</h1>
        @include('forms.main')</p>
    </div>
    <div class="clear" style="padding: 5px;"></div>

@endsection