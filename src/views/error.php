<!DOCTYPE html>
<html>
<head>

<title>Error <?=$code;?></title>

<meta http-equiv="cache-control" content="no-cache"/>
<meta http-equiv="content-language" content="en-US"/>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>

<style type="text/css">
    html {
        background: #f2f4f2;
    }
    body {
        font-family: "Helvetica Neue","Helvetica","Arial","sans-serif";
        -webkit-text-shadow: 0 1px 0px #fff;
        -moz-text-shadow: 0 1px 0px #fff;
        -o-text-shadow: 0 1px 0px #fff;
        text-shadow: 0 1px 0px #fff;
        font-size: 16px;
        color:#7b7a76;
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
        color: #cead48;
        margin: 0;
    }
    p {
        line-height: 1.5;
    }
    a {
        color: #ddc784;
        font-weight: 900;
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

    echo '<h1>'.$code.'</h1>';
    echo '<h2>'.$error['name'].'</h2>';
    echo '<p>'.$error['copy'].'</p>';
    echo $code != 503 ? '<p><a href="'.URL::to('/').'">Go back to the home page</a>.</p>' : '';

    ?>
</div>

</body>
</html>