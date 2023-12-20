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
$routes->get('talent', 'fr_index::talent');
$routes->get('details-talent', 'fr_index::details_talent');
$routes->get('details-service', 'fr_index::details_service');
$routes->get('service', 'fr_index::service');
$routes->get('post', 'fr_index::post');
$routes->get('error', 'fr_index::error');
$routes->get('terms', 'fr_index::terms');
$routes->get('privacy', 'fr_index::privacy');
$routes->get('forget', 'fr_index::forget');
$routes->get('blog1', 'fr_index::blog1');
$routes->get('blog2', 'fr_index::blog2');
$routes->get('blog3', 'fr_index::blog3');
