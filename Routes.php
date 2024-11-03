<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home-1', 'Home::home');
$routes->get('/date-time', 'Home::date');
$routes->get('/tujuan-tempat', 'Home::tempat');
$routes->get('/makan-apa', 'Home::makan');
$routes->get('/i-foto', 'Home::i');
$routes->get('/u-foto', 'Home::u');
$routes->get('/iu-foto', 'Home::iu');
$routes->get('/proses-tempat', 'Home::proses_tempat');
