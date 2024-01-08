<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/registrasi', 'RegistrasiController::registrasi');
$routes->post('/login', 'LoginController::login');

$routes->group('transaksi', function ($routes) {
    $routes->post('/', 'TransaksiController::create');
    $routes->get('/', 'TransaksiController::list');
    $routes->get('(:segment)', 'TransaksiController::detail/$1');
    $routes->put('(:segment)', 'TransaksiController::ubah/$1');
    $routes->delete('(:segment)', 'TransaksiController::hapus/$1');
}); 

$routes->group('matkul', function ($routes) {
    $routes->post('/', 'MatkulController::create');
    $routes->get('/', 'MatkulController::list');
    $routes->get('(:segment)', 'MatkulController::detail/$1');
    $routes->put('(:segment)', 'MatkulController::ubah/$1');
    $routes->delete('(:segment)', 'MatkulController::hapus/$1');
}); 