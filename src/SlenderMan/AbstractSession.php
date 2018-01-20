<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Aesonus\SlenderMan;
use Interop\Container\ContainerInterface;

/**
 * Description of AbstractSession
 *
 * @author Aesonus
 */
abstract class AbstractSession implements Contracts\SessionInterface
{
    /**
     *
     * @var ContainerInterface 
     */
    protected $container;
    
    public function __construct(ContainerInterface $c)
    {
        $this->container = $c;
    }
    
    public function get($id)
    {
        return $this->has($id) ? $_SESSION[$id] : null;
    }

    public function has($id)
    {
        return isset($_SESSION[$id]);
    }

    public function set($id, $value)
    {
        $_SESSION[$id] = $value;
        return $this;
    }

    public function clear($id)
    {
        unset($_SESSION[$id]);
        return $this;
    }
}
