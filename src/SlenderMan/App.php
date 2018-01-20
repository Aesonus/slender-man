<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Aesonus\SlenderMan;

/**
 * Description of App
 *
 * @author Aesonus
 */
class App extends \DI\Bridge\Slim\App
{

    /**
     * Configuration files path
     * @var string 
     */
    protected $config_path;

    /**
     * Path to container services. (Will be glob'ed)
     * @var string 
     */
    protected $services_path;

    /**
     * 
     * @param string $config_path A path to the directory that has config files
     * @param string $services_path A path to the services directory
     */
    public function __construct(
        $config_path = ENV_APP_ROOT . '/app/config', 
        $services_path = ENV_APP_ROOT . '/app/services'
        )
    {
        $this->config_path = $config_path;
        $this->services_path = $services_path;
        parent::__construct();
    }

    protected function configureContainer(\DI\ContainerBuilder $builder)
    {
        $builder->addDefinitions($this->config_path . '/' . ENV_APP_MODE . '.php');
        $this->addServices($builder);
    }

    private function addServices(\DI\ContainerBuilder $builder)
    {
        $pattern = '*.php';
        $files = glob($this->services_path. "/$pattern");
        foreach ($files as $file) {
            $builder->addDefinitions($file);
        }
    }
}
