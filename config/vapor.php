<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Redirect "www" To The Root Domain
    |--------------------------------------------------------------------------
    |
    | When this option is enabled, Vapor will redirect requests to the "www"
    | subdomain to the application's root domain. When this option is not
    | enabled, Vapor redirects your root domain to the "www" subdomain.
    |
    */

    'redirect_to_root' => true,

    /*
    |--------------------------------------------------------------------------
    | Redirect robots.txt
    |--------------------------------------------------------------------------
    |
    | When this option is enabled, Vapor will redirect requests for your
    | application's "robots.txt" file to the location of the S3 asset
    | bucket or CloudFront's asset URL instead of serving directly.
    |
    */

    'redirect_robots_txt' => true,

    /*
    |--------------------------------------------------------------------------
    | Servable Assets
    |--------------------------------------------------------------------------
    |
    | Here you can configure list of public assets that should be servable
    | from your application's domain instead of only being servable via
    | the public S3 "asset" bucket or the AWS CloudFront CDN network.
    |
    */

    'serve_assets' => [
        'bg.jpg',
        'button_bg.jpg',
        'index_r1_c1.jpg',
        'index_r1_c1_f2.jpg',
        'index_r1_c4.jpg',
        'index_r1_c4_f2.jpg',
        'index_r1_c5.jpg',
        'index_r1_c5_f2.jpg',
        'index_r1_c7.jpg',
        'index_r1_c7_f2.jpg',
    ],

];
