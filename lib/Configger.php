<?php
namespace Lib;

class Configger
{
    protected $env;
    protected $files;

    public function __construct($env, $files)
    {
        $this->env   = $env;
        $this->files = $files;
    }

    public function getConfig()
    {
        $config = array();
        foreach ($this->files as $name) {
            $config = array_merge($config, $this->getConfigFromFile($name));
        }
        return $config;
    }

    protected function getConfigFromFile($name)
    {
        $path = '/src/Config/%s.%s.php';
        $filename = WEB_ROOT . sprintf($path, $name, $this->env);
        $config = require_once $filename;
        return $config;
    }
}
