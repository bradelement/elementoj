<?php
namespace App\Rpc;

use Lib\Env;
use Lib\Prototype\BaseRpc;

class SinaRpc extends BaseRpc
{
    protected $base_uri = array(
        Env::DEV    => 'http://www.sina.com',
        Env::TEST   => 'http://www.sina.com',
        Env::ONLINE => 'http://www.sina.com',
    );
    protected $timeout = 5;
    protected $api_list = array(
        'page' => array('GET', '/', array()),
    );
}
