
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>@yield('title')</title>
    <meta name="Description" content="@yield('description')" />
    <meta name="Keywords" content="@yield('keywords')" />
    <meta name="DC.Language" content="English" />
    <meta name="ROBOTS" content="ALL,NOODP" />
    <meta name="AUTHOR" content="Rawrsome Designs Ltd" />
    <meta name="COPYRIGHT" content="Rawrsome Designs Ltd" />
    <link href="/css/app.css" rel="stylesheet">
    <script src="js/js.js"></script>

    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-40041969-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();

    </script>
</head>

<body>
<div id="main_container">

    <!-- Logo Area -->
    @include('main.logoarea')
    <!-- END Logo Area -->
    <!-- Navigation Area -->
    @include('main.nav')

    <!-- END Navigation Area -->

    <!--  Content Area -->
    <div id="content_area">
       @yield('content')
    </div>
    <!-- END Content Area -->
    <!-- Bottom Information Area -->
    <div id="bottom_content_container">
        <div id="websiteby">
            <h3>Rawrsome Designs</h3>
            <p>Created by Rawrsome Designs, website designers in Surrey</p>
        </div>
        <div class="clear"></div>
    </div>
    <!--  END Bottom Information Area -->

</div>
</body>
</html>
