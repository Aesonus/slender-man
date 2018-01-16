<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Narya\SlenderMan\Middleware;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Views\Twig;
use Slim\Csrf\Guard;

/**
 * Description of Csrf
 *
 * @author Narya
 */
class CsrfView extends Middleware
{
    /**
     *
     * @var Twig 
     */
    protected $view;
    
    /**
     *
     * @var Guard 
     */
    protected $guard;
    
    public function __construct(\Interop\Container\ContainerInterface $c)
    {
        $this->view = $c->get(Twig::class);
        $this->guard = $c->get(Guard::class);
        parent::__construct($c);

    }
    
    public function guard(Request $request, Response $response, callable $next)
    {
        $guard = $this->guard;
        $view = $this->view;
        
        $csrf = [
            'name' => [
                'key' => $guard->getTokenNameKey(),
                'value' => $request->getAttribute($guard->getTokenNameKey())
            ],
            'token' => [
                'key' => $guard->getTokenValueKey(),
                'value' => $request->getAttribute($guard->getTokenValueKey())
            ],
        ];
        
        $view->getEnvironment()->addGlobal('csrf', $csrf);
        
        return $next($request,$response);

    }
}
