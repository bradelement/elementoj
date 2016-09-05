<?php
namespace App\Controller;

class ApiController extends BaseController
{
    public function blank($request, $response, $args)
    {
        return $this->rpc->request('page', array());
    }
}
