<?php
namespace App\Bootstrap;

use Lib\Prototype\IocBase;

class DependencyProvider extends IocBase
{
    /*
     * require: path, name
     */
    public function getLogger()
    {
        $settings = $this->ci->get('settings')['logger'];
        $handler = new \Monolog\Handler\RotatingFileHandler($settings['path']);
        $formatter = new \Monolog\Formatter\LineFormatter();
        $formatter->ignoreEmptyContextAndExtra();
        $handler->setFormatter($formatter);

        $logger = new \Monolog\Logger($settings['name']);
        $logger->pushHandler($handler);

        return $logger;
    }

    public function getOrm($dbname)
    {
        $settings = $this->ci->get('settings')[$dbname];
        $database = new \medoo([
            'database_type' => 'mysql',
            'database_name' => $settings['database'],
            'server'        => $settings['host'],
            'username'      => $settings['username'],
            'password'      => $settings['password'],
            'port'          => $settings['port'],
            'charset'       => 'utf8'

        ]);
        return $database;
    }
}
