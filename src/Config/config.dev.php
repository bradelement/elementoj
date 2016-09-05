<?php

return array(
    //slim
    'displayErrorDetails' => true,
    'determineRouteBeforeAppMiddleware' => true,
    //logger
    'logger' => array(
        'name' => 'elementoj',
        'path' => WEB_ROOT . '/logs/app.log',
    ),
);
