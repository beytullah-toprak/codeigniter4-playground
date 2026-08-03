<?php

use CodeIgniter\Router\RouteCollection;

/**
 * API routes
 *
 * @var RouteCollection $routes
 */
$routes->group('api', [
    'namespace' => 'App\Controllers\Api',
    // 'filter' => 'cors',
], static function ($routes) {
    // $routes->get('users', 'Users::index');
});
