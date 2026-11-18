<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Portofolio::index');
$routes->get('beranda', 'Portofolio::index');

$routes->get('profil', 'Portofolio::profil');
$routes->get('artikel', 'Portofolio::artikel');
$routes->get('portofolio', 'Portofolio::portofolio');
$routes->get('tentang', 'Portofolio::tentang');
