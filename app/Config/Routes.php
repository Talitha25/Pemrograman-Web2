<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/beranda', 'Home::index');
$routes->get('/mahasiswa', 'Home::mahasiswa');
$routes->get('/dosen', 'Home::dosen');
$routes->get('/mata-kuliah', 'Home::matakuliah');
$routes->get('/tentang', 'Home::tentang');
