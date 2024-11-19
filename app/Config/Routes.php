<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/input_rjalan', 'Home::rawatJalan');
$routes->get('/input_rinap', 'Home::rawatInap');

$routes->post('/input_rjalan/submit', 'RawatJalanController::submit');
$routes->post('/input_rinap/submit', 'RawatInapController::submit');

$routes->get('/sukses', 'Home::sukses');
