<?php
class Bootstrap extends \Phalcon\Mvc\Application
{
    protected $modules;
    private $default_module = 'frontend';
 
    public function __construct($default_module)
    {
        $this->modules = array(
            'frontend' => array(
                'className' => 'App\Frontend\Module',
                'path' => __DIR__ . '/Frontend/Module.php'
            ),  
        );
        $this->default_module = $default_module;
    }
 
    private function _registerServices()
    {
        $default_module = $this->default_module;
        $di = new \Phalcon\DI\FactoryDefault();
        $config = require __DIR__ . '/../config/config.php';
        $modules = $this->modules;
        include_once __DIR__ . '/../config/loader.php';
        include_once __DIR__ . '/../config/services.php';
        include_once __DIR__ . '/../config/router.php';
        $this->setDI($di);
    }
    
    public function init()
    {
        $debug = new \Phalcon\Debug();
        $debug->listen();
        $this->_registerServices();
        $this->registerModules($this->modules);
        
        $this->handle($_SERVER["REQUEST_URI"])->send();
        // echo $_SERVER["REQUEST_URI"];
    }
}
