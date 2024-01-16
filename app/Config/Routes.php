<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//CMS
$routes->get('cms/', 'BeCms::index');
$routes->post('chk_login/', 'BeCms::check_login');
$routes->get('cms/dashboard', 'BeCms::dashboard',['filter' => 'Auth']);
$routes->get('logout', 'BeCms::logout');
$routes->get('cms/galeri', 'BeCms::gallery',['filter' => 'Auth']);
$routes->post('cms/add_ktg_gl', 'BeCms::add_ktg_gl',['filter' => 'Auth']);
$routes->post('cms/update_ktg_gl', 'BeCms::update_ktg_gl',['filter' => 'Auth']);
$routes->post('cms/delete_ktg_gl', 'BeCms::delete_ktg_gl',['filter' => 'Auth']);
$routes->post('cms/addgaleri', 'BeCms::addgaleri',['filter' => 'Auth']);
$routes->post('cms/updategaleri', 'BeCms::updategaleri',['filter' => 'Auth']);
$routes->get('cms/pagegaleri', 'BeCms::pagegaleri');
$routes->get('cms/del-gallery/(:num)', 'BeCms::delgaleri/$1', ['filter' => 'Auth']);

//FrontEnd
$routes->get('/', 'fr_index::index');
$routes->get('/{locale}', 'fr_index::index');
$routes->get('login', 'fr_index::login');
$routes->get('register', 'fr_index::register');
$routes->get('{locale}/about/', 'fr_index::about');
$routes->get('about/', 'fr_index::about');

//FrontEnd
$routes->get('/', 'fr_index::index');
$routes->get('{locale}/', 'fr_index::index');
$routes->get('{locale}/login', 'fr_index::login');
$routes->get('{locale}/register', 'fr_index::register');
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
$routes->get('{locale}/terms/', 'fr_index::terms');
$routes->get('{locale}/privacy/', 'fr_index::privacy');
$routes->get('{locale}/forget/', 'fr_index::forget');
$routes->get('{locale}/blog1', 'fr_index::blog1');
$routes->get('{locale}/blog2', 'fr_index::blog2');
$routes->get('{locale}/blog3', 'fr_index::blog3');
$routes->get('{locale}/career', 'fr_index::career');
$routes->get('{locale}/user-dashboard', 'fr_index::dashboardUser');
$routes->get('{locale}/ui-elements', 'fr_index::uiele');

// user post
$routes->get('user/pagegaleriuser', 'fr_index::pagegaleriuser');