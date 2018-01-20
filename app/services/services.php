<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Interop\Container\ContainerInterface as Container;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;

return [
    Twig::class => function (Container $c) {
        $view = new Twig(ENV_APP_ROOT . '/resources/views', [
            'cache' => $c->get('twig')['cache'],
            'debug' => $c->get('twig')['debug'],
        ]);

        $view->addExtension(new TwigExtension(
            $c->get('router'), $c->get('request')->getUri()
        ));
        $view->addExtension(new Aesonus\SlenderMan\TwigExtension());
        $view->getEnvironment()->addGlobal('site_root', $c->get('site_root'));

        return $view;
    },
];
