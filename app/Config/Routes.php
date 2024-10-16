<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('About', 'Home::About');
$routes->get('Skills', 'Home::Skills');
$routes->get('Services', 'Home::Services');
$routes->get('Contact', 'Home::Contact');
$routes->get('More', 'Home::More');