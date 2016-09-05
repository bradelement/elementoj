<?php
namespace Lib;

class Env
{
    const DEV    = 'dev';
    const TEST   = 'test';
    const ONLINE = 'online';

    private static $env = null;
    private static $valid = array(self::DEV, self::TEST, self::ONLINE);

    public static function getEnv()
    {
        if (is_null(self::$env)) {
            self::$env = self::getEnvFromFile();
        }
        return self::$env;
    }

    protected static function getEnvFromFile()
    {
        $filename = WEB_ROOT . "/env";
        if (!file_exists($filename)) {
            exit('env does not exist');
        }
        $content = trim(file_get_contents($filename));
        if (!in_array($content, self::$valid)) {
            exit('env is not valid');
        }
        return $content;
    }
}
