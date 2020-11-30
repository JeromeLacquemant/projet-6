<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'blog', '_controller' => 'App\\Controller\\BlogController::index'], null, null, null, false, false, null]],
        '/blog/new' => [[['_route' => 'figure_create', '_controller' => 'App\\Controller\\BlogController::form'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'security_registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/deconnexion' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/oublipass' => [[['_route' => 'app_forgotten_password', '_controller' => 'App\\Controller\\SecurityController::forgottenPass'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/blog/([^/]++)(?'
                    .'|/(?'
                        .'|edit(*:32)'
                        .'|delete(*:45)'
                    .')'
                    .'|(*:53)'
                .')'
                .'|/delete/(?'
                    .'|image/([^/]++)(*:86)'
                    .'|video/([^/]++)(*:107)'
                .')'
                .'|/activation([^/]++)(*:135)'
                .'|/reset\\-pass/([^/]++)(*:164)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        32 => [[['_route' => 'blog_edit', '_controller' => 'App\\Controller\\BlogController::form'], ['id'], null, null, false, false, null]],
        45 => [[['_route' => 'blog_delete', '_controller' => 'App\\Controller\\BlogController::delete_figure'], ['id'], null, null, false, false, null]],
        53 => [[['_route' => 'blog_show', '_controller' => 'App\\Controller\\BlogController::show'], ['id'], null, null, false, true, null]],
        86 => [[['_route' => 'figure_delete_image', '_controller' => 'App\\Controller\\BlogController::deleteImage'], ['id'], ['DELETE' => 0], null, false, true, null]],
        107 => [[['_route' => 'figure_delete_video', '_controller' => 'App\\Controller\\BlogController::deleteVideo'], ['id'], ['DELETE' => 0], null, false, true, null]],
        135 => [[['_route' => 'activation', '_controller' => 'App\\Controller\\SecurityController::activation'], ['token'], null, null, false, true, null]],
        164 => [
            [['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\SecurityController::resetPassword'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
