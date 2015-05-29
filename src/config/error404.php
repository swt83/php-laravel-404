<?php

return [

	#################################################
	# Colors for use in the template.
	#################################################
    'colors' => [
        'background' => '#ecf0f1',
        'number' => '#7f8c8d',
        'title' => '#bdc3c7',
        'copy' => '#95a5a6',
        'link' => '#ecf0f1',
        'link_background' => '#7f8c8d',
    ],

	#################################################
	# Error codes and their descriptions.
    # http://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html
	#################################################
    'codes' => [
    	404 => [
            'name' => 'Not Found',
            'copy' => 'The page you requested could not be found.',
        ],
        500 => [
            'name' => 'Internal Server Error',
            'copy' => 'The page you requested was unable to load.',
        ],
        503 => [
            'name' => 'Service Unavailable',
            'copy' => 'This website is temporarily‎ down for maintenance.',
        ],
    ],

];