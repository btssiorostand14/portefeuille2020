<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'ptfl' => [[], ['_controller' => 'App\\Controller\\PtflController::index'], [], [['text', '/ptfl']], [], []],
    'sio' => [[], ['_controller' => 'App\\Controller\\PtflController::index'], [], [['text', '/ptflsio']], [], []],
    'referentiel' => [[], ['_controller' => 'App\\Controller\\PtflController::referentiel'], [], [['text', '/referentiel']], [], []],
    'carnet' => [[], ['_controller' => 'App\\Controller\\PtflController::carnetbord'], [], [['text', '/carnetbord']], [], []],
];
