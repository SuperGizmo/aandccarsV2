@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form ID="ContactUs-2" method="post" action="sendmail" Name="ContactUs-2">
    <div id="Contact-2">
        <ul>
            <li>Name: &#42;<br /><input type="text" name="name" required /></li>
            <li>Contact Number: &#42;<br /><input type="text" name="phone" required /></li>
            <li>Email: &#42;<br /><input type="email" name="email" required /></li>
            <li>From: &#42;<br /><input type="text" Name="From" value="" /></li>
            <li>To: &#42;<br /><input type="text" Name="To" value="" /></li>
            <li>Date: &#42;<br /><input type="text" Name="Date" value="" /></li>
            <li>Time: &#42;<br /><input type="text" Name="Time" value="" /></li>
            <li>Flight Number: &#42;<br /><input type="text" Name="flightNumber" value="" /></li>
            <li>Do you require meet and greet?: <br />
            <select name="meetAndGreet">
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select></li>
            <li>Do you require airport Car Park?: <br />
                <select name="airportCarpark">
                    <option value="Yes">Yes</option>
                    <option value="No" selected>No</option>
                </select>
            </li>
            {!! csrf_field() !!}
{{--            <li><input type="submit" value="Book" Name="Submit"  /></li>--}}
            <li><button class="g-recaptcha"
                        data-sitekey="{{ env('recaptcha_public_key') }}"
                        data-callback='onSubmit'
                        data-action='submit'>Book</button></li>
        </ul>
    </div>
</form>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
    function onSubmit(token) {
        document.getElementById("ContactUs-2").submit();
    }
</script>
