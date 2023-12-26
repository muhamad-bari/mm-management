<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//CMS

//FrontEnd
$routes->get('/', 'fr_index::index');
$routes->get('/{locale}', 'fr_index::index');
$routes->get('login', 'fr_index::login');
$routes->get('register', 'fr_index::register');
// $routes->get('about', 'fr_index::about');
$routes->get('{locale}/about/', 'fr_index::about');
$routes->get('{locale}/blog/', 'fr_index::blog');
$routes->get('{locale}/gallery/', 'fr_index::gallery');
$routes->get('{locale}/contact/', 'fr_index::contact');
$routes->get('{locale}/talent/', 'fr_index::talent');
$routes->get('{locale}/details-talent/', 'fr_index::details_talent');
$routes->get('{locale}/details-service/', 'fr_index::details_service');
$routes->get('{locale}/service/', 'fr_index::service');
$routes->get('{locale}/post/', 'fr_index::post');
$routes->get('{locale}/error/', 'fr_index::error');
$routes->get('{locale}terms/', 'fr_index::terms');
$routes->get('{locale}/privacy/', 'fr_index::privacy');
$routes->get('{locale}/forget/', 'fr_index::forget');
$routes->get('blog1', 'fr_index::blog1');
$routes->get('blog2', 'fr_index::blog2');
$routes->get('blog3', 'fr_index::blog3');
$routes->get('career', 'fr_index::career');
