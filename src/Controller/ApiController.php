<?php
namespace App\Controller;

class ApiController extends BaseController
{
    public function blank($request, $response, $args)
    {
        $this->view->render([]);
    }
}
