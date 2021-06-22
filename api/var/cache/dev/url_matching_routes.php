<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/product/add' => [[['_route' => 'add_products', '_controller' => 'App\\Controller\\ProductController::add'], null, ['POST' => 0], null, false, false, null]],
        '/api/product/getAll' => [[['_route' => 'get-all-products', '_controller' => 'App\\Controller\\ProductController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/api' => [[['_route' => 'home', '_controller' => 'App\\Controller\\ProductController::index'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/product/([^/]++)(?'
                    .'|(*:31)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:67)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [
            [['_route' => 'get-product-by-id', '_controller' => 'App\\Controller\\ProductController::get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_product', '_controller' => 'App\\Controller\\ProductController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_product', '_controller' => 'App\\Controller\\ProductController::deleteProduct'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        67 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
