<?php

use CodeIgniter\Router\RouteCollection;

/**
 * Admin panel routes
 *
 * @var RouteCollection $routes
 */
$routes->group('admin', [
    'namespace' => 'App\Controllers\Admin',
    // 'filter' => 'auth', // auth filter ekleyince aç
], static function ($routes) {
    // $routes->get('/', 'Dashboard::index');
});
