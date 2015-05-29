<?php

return [

	#################################################
	# Colors for use in the template.
	#################################################
    'colors' => [
        'background' => '#FFF',
        'number' => '#AAA',
        'title' => '#333',
        'copy' => '#666',
        'link' => '#AAA',
    ),

	#################################################
	# Error codes and their descriptions.
    # http://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html
	#################################################
    'codes' => [
    	404 => [
            'name' => 'Not Found',
            'copy' => 'The page you requested could not be found.'
        ],
        500 => [
            'name' => 'Internal Server Error',
            'copy' => 'The page you requested was unable to load.'
        ],
        503 => [
            'name' => 'Service Unavailable',
            'copy' => 'This website is temporarily‎ down for maintenance.'
        ],
    ]

];