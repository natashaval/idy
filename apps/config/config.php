<?php

use Phalcon\Config;

return new Config(
    [
        'mode' => getenv('APP_MODE'), //DEVELOPMENT, PRODUCTION, DEMO

        'url' => [
            'baseUrl' => getenv('BASE_URL'),
        ],

        'database' => [
            'adapter' => getenv('IDEA_DB_ADAPTER'),
            'host' => getenv('IDEA_DB_HOST'),
            'username' => getenv('IDEA_DB_USERNAME'),
            'password' => getenv('IDEA_DB_PASSWORD'),
            'dbname' => getenv('IDEA_DB_NAME'),
            'charset' => 'utf8'
        ], 
        
        'application' => [
            'libraryDir' => APP_PATH . "/lib/",
            'cacheDir' => APP_PATH . "/cache/",
        ],

        'version' => '0.1',
    ]
);
