<?php

return [
    '/' => [
        'controller' => App\Http\Web\Controllers\TestController::class,
        'action'     => 'index'
    ],
    '/(\d+)' => [
        'controller' => App\Http\Web\Controllers\TestController::class,
        'action'     => 'index',
        'gets'       => 'sid=$1',
    ],
    '/(\w)/(\d+)' => [
        'controller' => App\Http\Web\Controllers\TestController::class,
        'action'     => '$1',
        'gets'       => 'sid=$2',
    ],
];