<?php

return array(
    //slim
    'addContentLengthHeader' => true,
    'displayErrorDetails' => true,
    'determineRouteBeforeAppMiddleware' => true,
    //logger
    'logger' => array(
        'name' => 'elementoj',
        'path' => WEB_ROOT . '/logs/app.log',
    ),
);
