<!DOCTYPE html>
<html>
<head>

<title>Error {{ $code }}</title>

<meta http-equiv="cache-control" content="no-cache"/>
<meta http-equiv="content-language" content="en-US"/>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>

<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<style type="text/css">
    html {
        background: {{ Config::get('error404.colors.background') }};
    }
    body {
        font-family: "Abel", sans-serif;
        font-size: 20px;
        color: {{ Config::get('error404.colors.copy') }};
    }
    div {
        margin: 50px auto;
        width: 500px;
        text-align: center;
    }
    h1 {
        line-height: 1;
        font-size: 10em;
        font-weight: 900;
        color: {{ Config::get('error404.colors.number') }};
        margin: 0;
    }
    h2 {
        margin: 0;
        font-size: 2em;
        text-transform: uppercase;
        color: {{ Config::get('error404.colors.title') }};
    }
    p {
        margin: 0 0 2em 0;
        line-height: 1.5;
        color: {{ Config::get('error404.colors.copy') }};
    }
    a {
        background: {{ Config::get('error404.colors.link_background') }};
        color: {{ Config::get('error404.colors.link') }};
        text-transform: uppercase;
        font-weight: 900;
        text-decoration: none;
        padding: 7px 20px;
    }
</style>

</head>
<body>

<div>
    <?php
    $map = Config::get('error404.codes');
    $error = isset($map[$code]) ? $map[$code] : $map[500];
    ?>
    <hgroup>
        <h1>{{ $code }}</h1>
        <h2>{{ $error['name'] }}</h2>
    </hgroup>
    <p>{{ $error['copy'] }}</p>
    @if ($code != 503)
        <p><a href="{{ URL::to('/') }}">Go Back</a></p>
    @endif
</div>

</body>
</html>