<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//CMS

//FrontEnd
$routes->get('/', 'fr_index::index');
$routes->get('login', 'fr_index::login');
$routes->get('register', 'fr_index::register');
$routes->get('about', 'fr_index::about');
$routes->get('blog', 'fr_index::blog');
$routes->get('gallery', 'fr_index::gallery');
$routes->get('contact', 'fr_index::contact');
$routes->get('service', 'fr_index::service');
