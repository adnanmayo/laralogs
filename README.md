## Laravel Monolog MySQL Handler.

This package will send logs information in your browser using pusher.

### Installation

~~~
composer require adnanmayo/laralogs
~~~

Open up `config/app.php` and find the `providers` key.

~~~
'providers' => array(
    // ...
    \Adnanmayo\Laralog\LaralogServiceProvider::class,,
);
~~~

Publish config using Laravel Artisan CLI.

~~~
php artisan vendor:publish
~~~


After config go to `app/laralogs.php` set your middleware and route

~~~
    'middleware' => 'web',
    'route' => 'laralogs',
~~~


In `.env` set your Pusher credentials

~~~
   PUSHER_APP_ID=XXXXX
   PUSHER_APP_KEY=XXXXX
   PUSHER_APP_SECRET=XXXX
~~~




## Application Integration

In your application `bootstrap/app.php` add:

~~~php
$app->configureMonologUsing(function($monolog) use($app) {
    $monolog->pushHandler(new Adnanmayo\Laralog\LaralogHandler());
});
~~~

