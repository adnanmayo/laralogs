<?php

return [

    'middleware' => 'web',
    'route' => 'laralogs',

    'pusher' => [
        'driver' => 'pusher',
        'key' => env('PUSHER_APP_KEY'),
        'secret' => env('PUSHER_APP_SECRET'),
        'app_id' => env('PUSHER_APP_ID'),
        'options' => [
            'cluster' => 'ap1'
        ],
    ],


];