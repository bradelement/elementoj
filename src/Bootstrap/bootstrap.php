<?php
use App\Bootstrap\DependencyProvider;
use App\Middleware\Log;
use App\Controller\ApiController;
use App\View\ApiView;
use App\Rpc\SinaRpc;

//route
$app->group('/api',  function(){
    $this->get('/blank',  ApiController::class . ':blank');
})->add(Log::class);

//dependency
$container = $app->getContainer();
$container['provider'] = function ($c) {
    return new DependencyProvider($c);
};
$container['logger'] = function ($c) {
    return $c['provider']->getLogger();
};
$container['view'] = function ($c) {
    return new ApiView($c['response']);
};
//model
// $container['mqModel'] = function ($c) {
//     return new MqModel($c);
// };
//Rpc
$container['rpc'] = function ($c) {
    return new SinaRpc($c);
};
