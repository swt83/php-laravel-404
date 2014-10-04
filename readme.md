# 404

A Laravel PHP package for my default 404 page.  Actually, it handles all the error pages.

## Install

Normal install via Composer.

### Provider

Register the service provider in your ``app/config/app.php`` file:

```php
'Travis\Error404\Provider'
```

### Config

Copy the config file to ``app/config/packages/travis/404/config.php`` and input the necessary information.

## Usage

Open ``bootstrap/start.php`` and patch the environment:

```php
$env = $app->detectEnvironment(function()
{
    return isset($_SERVER['LARAVEL_ENV']) ? $_SERVER['LARAVEL_ENV'] : 'development';
});
```

Open ``app/start/global.php`` and patch the error handling:

```php
App::error(function(Exception $exception, $code)
{
    $test = $exception instanceof Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
    if (!$test)
    {
        Log::error($exception);
    }

    if (!Config::get('app.debug'))
    {
        return Response::make(View::make('404::error')->with('code', $code), $code);
    }
});
```

```php
App::down(function()
{
    return Response::make(View::make('404::error')->with('code', 503), 503);
});
```

Open ``app/config/app.php`` and patch the debug option:

```php
'debug' => isset($_SERVER['LARAVEL_ENV']) ? false : true,
```

You can see what the page looks like by pointing your browser here:

```
http://<YOURDOMAIN>/404
```