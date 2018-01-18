<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Aesonus\SlenderMan\Middleware;

use Interop\Container\ContainerInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

/**
 * Description of Middleware
 *
 * @author Narya
 */
abstract class Middleware
{

    /**
     *
     * @var ContainerInterface
     */
    protected $container;

    /**
     * 
     * @param ContainerInterface $c
     * @param Request $request
     * @param Response $response
     * @param callable $next
     */
    public function __construct(ContainerInterface $c)
    {
        $this->container = $c;
    }
    
}
