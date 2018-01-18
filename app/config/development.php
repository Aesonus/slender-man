<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

return [
    'twig' => [
        'debug' => true,
        'cache' => false,
    ],
    'settings.displayErrorDetails' => true,
    'settings.determineRouteBeforeAppMiddleware' => true,
    'db' => [
            'driver' => 'mysql',
            'host' => '10.42.7.7',
            'name' => 'pokemon',
            'username' => 'pokemon',
            'password' => 'y2VZfbFxJPCEyRyM',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => ''
    ],
    'site_root' => 'http://mordor/SlenderMan',
];