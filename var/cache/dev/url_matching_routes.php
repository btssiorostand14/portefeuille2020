<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/ptfl' => [[['_route' => 'ptfl', '_controller' => 'App\\Controller\\PtflController::index'], null, null, null, false, false, null]],
        '/accueil' => [[['_route' => 'sio', '_controller' => 'App\\Controller\\PtflController::index'], null, null, null, false, false, null]],
        '/referentiel' => [[['_route' => 'referentiel', '_controller' => 'App\\Controller\\PtflController::referentiel'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/carnetbord/([^/]++)/([^/,]++),([^/]++)(*:81)'
                .'|/situation/([^/]++)/([^/,]++),([^/]++)(*:126)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        81 => [[['_route' => 'carnet', '_controller' => 'App\\Controller\\PtflController::carnetbord'], ['pIdEtud', 'pAnnee', 'pSemaine'], null, null, false, true, null]],
        126 => [
            [['_route' => 'situation', '_controller' => 'App\\Controller\\PtflController::situation'], ['pIdEtud', 'pIdSitu', 'pPage'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
