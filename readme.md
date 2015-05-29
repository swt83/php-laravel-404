# 404

A Laravel PHP package for my 404, 500, and 503 pages.

## Install

Normal install via Composer.

### Provider

Register the service provider in your ``config/app.php`` file:

```php
'Travis\Error404\Provider',
```

### Publish

Publish the config and view files:

```bash
$ php artisan vendor:publish
```

### Config

Edit the published ``config/error404.php`` file as necessary.

## Usage

Error pages are now handled automatically.  You can test your errors by visiting ``domain.com/404``, ``domain.com/500``, ``domain.com/503``.