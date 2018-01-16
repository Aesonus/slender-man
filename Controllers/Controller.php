<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Narya\Controllers\SlenderMan;

use Interop\Container\ContainerInterface as Container;
use Slim\Views\Twig;

/**
 * Description of Controller
 *
 * @author Narya
 */
class Controller
{
    /**
     *
     * @var Container 
     */
    protected $container;
    
    /**
     *
     * @var Twig
     */
    protected $view;
    
    /**
     * 
     * @param Container $c
     * @param Twig $view
     */
    public function __construct(Container $c, Twig $view)
    {
        $this->container = $c;
        $this->view = $view;
    }
}
