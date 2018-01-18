<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Narya\SlenderMan\App;

session_cache_limiter(false);
session_start();

//Environment constants
require dirname(__DIR__) . '/app/config/env.php';

//Autoload
require ENV_APP_ROOT . '/vendor/autoload.php';

//Show errors if we are in development mode
ini_set('display_errors', ENV_APP_MODE == 'production' ? 'Off' : 'On');

//Create a new Slim App instance
$app = new App();

//Adds global middleware
require ENV_APP_ROOT . '/app/middleware.php';

//Creates routes
require ENV_APP_ROOT . '/app/routes/routes.php';

//Run the application
$app->run();