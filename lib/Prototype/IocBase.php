<?php
namespace Lib\Prototype;

use Interop\Container\ContainerInterface;

class IocBase
{
    protected $ci;

    public function __construct(ContainerInterface $ci)
    {
        $this->ci = $ci;
    }

    public function __get($name)
    {
        return $this->ci->get($name);
    }
}
