<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 //CMS

 //FrontEnd
 $routes->get('index', 'fr_index::index');
 $routes->get('login', 'fr_index::login');
