@extends('main.main')

@section('title', 'Welcome to A and C Cars Chertsey Taxi')

@section('description', 'A and C Cars are based in Chertsey Surrey. We operate from Chertsey but we cover Surrey and Middlesex. We are reliable and fully licensed within Runnymede Council.')
@section('keywords', 'A and C Cars, Chertsey Taxi, Addlestone Taxi, Surrey Taxi, Runnymede Taxi')

@section('content')

    <div id="left_content" style="width: 774px;"><h2>Airport Price List</h2>
        <button onclick="carPrices()">Car Prices</button>
        @if(0)<button onclick="miniBusPrices()">Minibus Prices</button>@endif
        <div id="carPrices">
            <h2>Car Price List</h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Town</th>
                    <th>Heathrow<br />05:50 - 00:00</th>
                    <th>Heatrow<br />00:00 - 05:50</th>
                    <th>Gatwick<br />05:50 - 00:00</th>
                    <th>Gatwick<br />00:00 - 05:50</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Addlestone</td>
                        <td>£25.00</td>
                        <td>£30.00</td>
                        <td>£50.00</td>
                        <td>£60.00</td>
                    </tr>
                    <tr>
                        <td>Ascot</td>
                        <td>£40.00</td>
                        <td>£45.00</td>
                        <td>£70.00</td>
                        <td>£80.00</td>
                    </tr>
                    <tr>
                        <td>Brookwood</td>
                        <td>£50.00</td>
                        <td>£55.00</td>
                        <td>£70.00</td>
                        <td>£80.00</td>
                    </tr>
                    <tr>
                        <td>Byfleet</td>
                        <td>£30.00</td>
                        <td>£35.00</td>
                        <td>£60.00</td>
                        <td>£70.00</td>
                    </tr>
                    <tr>
                        <td>Chertsey</td>
                        <td>£25.00</td>
                        <td>£30.00</td>
                        <td>£50.00</td>
                        <td>£60.00</td>
                    </tr>
                    <tr>
                        <td>Chobham</td>
                        <td>£35.00</td>
                        <td>£40.00</td>
                        <td>£65.00</td>
                        <td>£75.00</td>
                    </tr>
                    <tr>
                        <td>Cobham</td>
                        <td>£45.00</td>
                        <td>£50.00</td>
                        <td>£65.00</td>
                        <td>£75.00</td>
                    </tr>
                    <tr>
                        <td>Egham</td>
                        <td>£25.00</td>
                        <td>£30.00</td>
                        <td>£60.00</td>
                        <td>£70.00</td>
                    </tr>
                    <tr>
                        <td>Englefield Green</td>
                        <td>£25.00</td>
                        <td>£30.00</td>
                        <td>£65.00</td>
                        <td>£75.00</td>
                    </tr>
                    <tr>
                        <td>Knaphill</td>
                        <td>£40.00</td>
                        <td>£45.00</td>
                        <td>£65.00</td>
                        <td>£75.00</td>
                    </tr>
                    <tr>
                        <td>Longcross</td>
                        <td>£30.00</td>
                        <td>£35.00</td>
                        <td>£50.00</td>
                        <td>£60.00</td>
                    </tr>
                    <tr>
                        <td>Lyne</td>
                        <td>£25.00</td>
                        <td>£30.00</td>
                        <td>£50.00</td>
                        <td>£60.00</td>
                    </tr>
                    <tr>
                        <td>Moseley</td>
                        <td>£40.00</td>
                        <td>£45.00</td>
                        <td>£55.00</td>
                        <td>£65.00</td>
                    </tr>
                    <tr>
                        <td>New Haw</td>
                        <td>£25.00</td>
                        <td>£30.00</td>
                        <td>£50.00</td>
                        <td>£60.00</td>
                    </tr>
                    <tr>
                        <td>Oatlands</td>
                        <td>£35.00</td>
                        <td>£40.00</td>
                        <td>£65.00</td>
                        <td>£75.00</td>
                    </tr>
                    <tr>
                        <td>Ottershaw</td>
                        <td>£25.00</td>
                        <td>£30.00</td>
                        <td>£50.00</td>
                        <td>£60.00</td>
                    </tr>
                    <tr>
                        <td>Ottershaw Park</td>
                        <td>£25.00</td>
                        <td>£30.00</td>
                        <td>£50.00</td>
                        <td>£60.00</td>
                    </tr>
                    <tr>
                        <td>Shepperton</td>
                        <td>£25.00</td>
                        <td>£30.00</td>
                        <td>£55.00</td>
                        <td>£65.00</td>
                    </tr>
                    <tr>
                        <td>Staines</td>
                        <td>£25.00</td>
                        <td>£30.00</td>
                        <td>£60.00</td>
                        <td>£70.00</td>
                    </tr>
                    <tr>
                        <td>Sunbury</td>
                        <td>£35.00</td>
                        <td>£40.00</td>
                        <td>£60.00</td>
                        <td>£70.00</td>
                    </tr>
                    <tr>
                        <td>Sunningdale</td>
                        <td>£35.00</td>
                        <td>£40.00</td>
                        <td>£70.00</td>
                        <td>£80.00</td>
                    </tr>
                    <tr>
                        <td>Sunninghill</td>
                        <td>£40.00</td>
                        <td>£45.00</td>
                        <td>£70.00</td>
                        <td>£80.00</td>
                    </tr>
                    <tr>
                        <td>TASIS</td>
                        <td>£25.00</td>
                        <td>£30.00</td>
                        <td>£50.00</td>
                        <td>£60.00</td>
                    </tr>
                    <tr>
                        <td>Thorpe</td>
                        <td>£25.00</td>
                        <td>£30.00</td>
                        <td>£50.00</td>
                        <td>£60.00</td>
                    </tr>
                    <tr>
                        <td>Virginia Water</td>
                        <td>£25.00</td>
                        <td>£30.00</td>
                        <td>£50.00</td>
                        <td>£60.00</td>
                    </tr>
                    <tr>
                        <td>Walton</td>
                        <td>£40.00</td>
                        <td>£45.00</td>
                        <td>£65.00</td>
                        <td>£75.00</td>
                    </tr>
                    <tr>
                        <td>Wentworth</td>
                        <td>£25.00</td>
                        <td>£30.00</td>
                        <td>£50.00</td>
                        <td>£60.00</td>
                    </tr>
                    <tr>
                        <td>West Byfleet</td>
                        <td>£35.00</td>
                        <td>£40.00</td>
                        <td>£60.00</td>
                        <td>£70.00</td>
                    </tr>
                    <tr>
                        <td>West End</td>
                        <td>£40.00</td>
                        <td>£45.00</td>
                        <td>£65.00</td>
                        <td>£75.00</td>
                    </tr>
                    <tr>
                        <td>Weybridge</td>
                        <td>£35.00</td>
                        <td>£40.00</td>
                        <td>£65.00</td>
                        <td>£75.00</td>
                    </tr>
                    <tr>
                        <td>Windlesham</td>
                        <td>£40.00</td>
                        <td>£45.00</td>
                        <td>£65.00</td>
                        <td>£75.00</td>
                    </tr>
                    <tr>
                        <td>Woking</td>
                        <td>£35.00</td>
                        <td>£40.00</td>
                        <td>£65.00</td>
                        <td>£75.00</td>
                    </tr>
                    <tr>
                        <td>Woodham</td>
                        <td>£35.00</td>
                        <td>£40.00</td>
                        <td>£65.00</td>
                        <td>£75.00</td>
                    </tr>
                </tbody>
            </table>
            <p>&nbsp;</p>
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>06:00 - 00:00 Car</th>
                        <th>00:00 - 06:00 Car</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>City Airport</td>
                        <td>£125.00</td>
                        <td>£135.00</td>
                    </tr>
                    <tr>
                        <td>Luton</td>
                        <td>£80.00</td>
                        <td>£90.00</td>
                    </tr>
                    <tr>
                        <td>Stansted</td>
                        <td>£125.00</td>
                        <td>£135.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
        @if(0)
        <div id="miniBusPrices" style="display: none;">
            <h2>Minibus Price List</h2>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Town</th>
                    <th>Heathrow<br />06:00 - 00:00</th>
                    <th>Heatrow<br />00:00 - 06:00</th>
                    <th>Gatwick<br />06:00 - 00:00</th>
                    <th>Gatwick<br />00:00 - 06:00</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Addlestone</td>
                    <td>£40.00</td>
                    <td>£40.00</td>
                    <td>£70.00</td>
                    <td>£70.00</td>
                </tr>
                <tr>
                    <td>Ascot</td>
                    <td>£45.00</td>
                    <td>£50.00</td>
                    <td>£90.00</td>
                    <td>£90.00</td>
                </tr>
                <tr>
                    <td>Brookwood</td>
                    <td>£60.00</td>
                    <td>£65.00</td>
                    <td>£80.00</td>
                    <td>£80.00</td>
                </tr>
                <tr>
                    <td>Byfleet</td>
                    <td>£40.00</td>
                    <td>£40.00</td>
                    <td>£70.00</td>
                    <td>£70.00</td>
                </tr>
                <tr>
                    <td>Chertsey</td>
                    <td>£40.00</td>
                    <td>£40.00</td>
                    <td>£70.00</td>
                    <td>£70.00</td>
                </tr>
                <tr>
                    <td>Chobham</td>
                    <td>£40.00</td>
                    <td>£40.00</td>
                    <td>£78.00</td>
                    <td>£78.00</td>
                </tr>
                <tr>
                    <td>Cobham</td>
                    <td>£50.00</td>
                    <td>£50.00</td>
                    <td>£75.00</td>
                    <td>£75.00</td>
                </tr>
                <tr>
                    <td>Egham</td>
                    <td>£40.00</td>
                    <td>£40.00</td>
                    <td>£75.00</td>
                    <td>£75.00</td>
                </tr>
                <tr>
                    <td>Englefield Green</td>
                    <td>£35.00</td>
                    <td>£35.00</td>
                    <td>£75.00</td>
                    <td>£75.00</td>
                </tr>
                <tr>
                    <td>Knaphill</td>
                    <td>£50.00</td>
                    <td>£50.00</td>
                    <td>£75.00</td>
                    <td>£75.00</td>
                </tr>
                <tr>
                    <td>Longcross</td>
                    <td>£40.00</td>
                    <td>£40.00</td>
                    <td>£70.00</td>
                    <td>£70.00</td>
                </tr>
                <tr>
                    <td>Lyne</td>
                    <td>£40.00</td>
                    <td>£40.00</td>
                    <td>£70.00</td>
                    <td>£70.00</td>
                </tr>
                <tr>
                    <td>Moseley</td>
                    <td>£45.00</td>
                    <td>£50.00</td>
                    <td>£80.00</td>
                    <td>£80.00</td>
                </tr>
                <tr>
                    <td>New Haw</td>
                    <td>£35.00</td>
                    <td>£35.00</td>
                    <td>£70.00</td>
                    <td>£70.00</td>
                </tr>
                <tr>
                    <td>Oatlands</td>
                    <td>£40.00</td>
                    <td>£40.00</td>
                    <td>£75.00</td>
                    <td>£75.00</td>
                </tr>
                <tr>
                    <td>Ottershaw</td>
                    <td>£40.00</td>
                    <td>£40.00</td>
                    <td>£70.00</td>
                    <td>£70.00</td>
                </tr>
                <tr>
                    <td>Ottershaw Park</td>
                    <td>£35.00</td>
                    <td>£35.00</td>
                    <td>£70.00</td>
                    <td>£70.00</td>
                </tr>
                <tr>
                    <td>Shepperton</td>
                    <td>£45.00</td>
                    <td>£45.00</td>
                    <td>£70.00</td>
                    <td>£70.00</td>
                </tr>
                <tr>
                    <td>Staines</td>
                    <td>£40.00</td>
                    <td>£40.00</td>
                    <td>£75.00</td>
                    <td>£75.00</td>
                </tr>
                <tr>
                    <td>Sunbury</td>
                    <td>£45.00</td>
                    <td>£45.00</td>
                    <td>£80.00</td>
                    <td>£80.00</td>
                </tr>
                <tr>
                    <td>Sunningdale</td>
                    <td>£45.00</td>
                    <td>£45.00</td>
                    <td>£90.00</td>
                    <td>£90.00</td>
                </tr>
                <tr>
                    <td>Sunninghill</td>
                    <td>£45.00</td>
                    <td>£50.00</td>
                    <td>£90.00</td>
                    <td>£90.00</td>
                </tr>
                <tr>
                    <td>TASIS</td>
                    <td>£40.00</td>
                    <td>£40.00</td>
                    <td>£70.00</td>
                    <td>£70.00</td>
                </tr>
                <tr>
                    <td>Thorpe</td>
                    <td>£40.00</td>
                    <td>£40.00</td>
                    <td>£70.00</td>
                    <td>£70.00</td>
                </tr>
                <tr>
                    <td>Virginia Water</td>
                    <td>£40.00</td>
                    <td>£40.00</td>
                    <td>£70.00</td>
                    <td>£70.00</td>
                </tr>
                <tr>
                    <td>Walton</td>
                    <td>£40.00</td>
                    <td>£45.00</td>
                    <td>£80.00</td>
                    <td>£80.00</td>
                </tr>
                <tr>
                    <td>Wentworth</td>
                    <td>£40.00</td>
                    <td>£40.00</td>
                    <td>£70.00</td>
                    <td>£70.00</td>
                </tr>
                <tr>
                    <td>West Byfleet</td>
                    <td>£40.00</td>
                    <td>£40.00</td>
                    <td>£70.00</td>
                    <td>£70.00</td>
                </tr>
                <tr>
                    <td>West End</td>
                    <td>£50.00</td>
                    <td>£50.00</td>
                    <td>£80.00</td>
                    <td>£80.00</td>
                </tr>
                <tr>
                    <td>Weybridge</td>
                    <td>£40.00</td>
                    <td>£40.00</td>
                    <td>£80.00</td>
                    <td>£80.00</td>
                </tr>
                <tr>
                    <td>Windlesham</td>
                    <td>£45.00</td>
                    <td>£45.00</td>
                    <td>£90.00</td>
                    <td>£90.00</td>
                </tr>
                <tr>
                    <td>Woking</td>
                    <td>£50.00</td>
                    <td>£50.00</td>
                    <td>£75.00</td>
                    <td>£75.00</td>
                </tr>
                <tr>
                    <td>Woodham</td>
                    <td>£40.00</td>
                    <td>£40.00</td>
                    <td>£70.00</td>
                    <td>£70.00</td>
                </tr>
                </tbody>
            </table>
            <p> </p>
            <table>
                <thead>
                <tr>
                    <th></th>
                    <th>06:00 - 00:00 Minibus</th>
                    <th>00:00 - 06:00 Minibus</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>City Airport</td>
                    <td>£120.00</td>
                    <td>£130.00</td>
                </tr>
                <tr>
                    <td>Luton</td>
                    <td>£100.00</td>
                    <td>£110.00</td>
                </tr>
                <tr>
                    <td>Stansted</td>
                    <td>£130.00</td>
                    <td>£140.00</td>
                </tr>
                </tbody>
            </table>
        </div>
        @endif
        <h2><span style="font-size: 10px;">&nbsp;</span></h2>
        <p><strong>Meet &amp; Greet service:</strong><span>&nbsp;For meeting inside the airport terminal a fee of £5.00 will be applied plus car parking. NOTE: additional waiting time in excess of 30 minutes will be applicable @ £20.00 per hour.</span></p>
    </div>

    <div id="right_content">
        <p><h1>Contact Us</h1>
        @include('forms.main')</p>
    </div>
    <div class="clear" style="padding: 5px;"></div>

@endsection