<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Aesonus\SlenderMan\Contracts;

/**
 *
 * @author Aesonus
 */
interface SessionInterface
{
    /**
     * Gets a value from $_SESSION superglobal
     * @param string $id
     * @return mixed 
     */
    public function get($id);
    
    /**
     * Sets a value from $_SESSION superglobal
     * @param string $id
     * @param mixed $value 
     * @return $this 
     */
    public function set($id, $value);
    
    /**
     * Has a key in $_SESSION superglobal
     * @param string $id
     * @return boolean 
     */
    public function has($id);    
    
    /**
     * Destroy a key in $_SESSION superglobal
     * @param string $id
     * @return $this 
     */
    public function clear($id);
    
}
