<?php
namespace App\View;

class ApiView extends BaseApiView
{
    protected $errorMap = array(
        'INPUT_ERROR'   => [-1, '%s'],
        'PROCESS_ERROR' => [-2, '%s'],
        'LOGIN_ERROR'   => [-3, '%s'],
    );
}
