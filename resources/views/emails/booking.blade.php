<h3>New Booking Enquiry</h3>

<p>
    Here are your booking details:
</p>

<ul>
    <li>Name: {{ $data['name'] }} </li>
    <li>Contact Number: {{ $data['phone'] }}</li>
    <li>Email: {{ $data['email'] }}</li>
    <li>From: {{ $data['From'] }}</li>
    <li>To: {{ $data['To'] }}</li>
    <li>Date: {{ $data['Date'] }}</li>
    <li>Time: {{ $data['Time'] }}</li>
    <li>Flight Number: {{ $data['flightNumber'] }}</li>
    <li>Do they require meet and greet: {{ $data['meetAndGreet'] }}</li>
    <li>Do they require airport carpark: {{ $data['airportCarpark'] }}</li>
</ul>
