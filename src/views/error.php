<!DOCTYPE html>
<html>
<head>

<title>Error <?=$code;?></title>

<meta http-equiv="cache-control" content="no-cache"/>
<meta http-equiv="content-language" content="en-US"/>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>

<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,700' rel='stylesheet' type='text/css'>
<style type="text/css">
    html {
        background: <?=Config::get('404::colors.background');?>;
    }
    body {
        font-family: "Titillium Web", sans-serif;
        font-size: 20px;
        color: <?=Config::get('404::colors.copy');?>;
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
        color: <?=Config::get('404::colors.number');?>;
        margin: 0;
    }
    h2 {
        font-size: 2em;
        line-height: 1;
        color: <?=Config::get('404::colors.title');?>;
    }
    p {
        line-height: 1.5;
        color: <?=Config::get('404::colors.copy');?>;
        margin-bottom: 2em;
    }
    a {
        background: <?=Config::get('404::colors.link');?>;
        color: #fff;
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

    // The following map of codes and copy was taken from:
    // http://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html
    $map = array(
        404 => array(
            'name' => 'Not Found',
            'copy' => 'The page you requested could not be found.'
        ),
        500 => array(
            'name' => 'Internal Server Error',
            'copy' => 'The page you requested was unable to load.'
        ),
        503 => array(
            'name' => 'Service Unavailable',
            'copy' => 'This website is temporarily‎ down for maintenance.'
        ),
    );

    $error = isset($map[$code]) ? $map[$code] : $map[500];

    echo '<hgroup>';
        echo '<h1>'.$code.'</h1>';
        echo '<h2>'.$error['name'].'</h2>';
    echo '</hgroup>';
    echo '<p>'.$error['copy'].'</p>';
    echo $code != 503 ? '<p><a href="'.URL::to('/').'">Go Back</a></p>' : '';

    ?>
</div>

</body>
</html>