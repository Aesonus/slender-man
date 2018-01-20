<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Put custom middleware here


//Add the middleware needed for all apps
$app->add([Aesonus\SlenderMan\Middleware\CsrfView::class,'guard']);
$app->add([\Slim\Csrf\Guard::class,'__invoke']);