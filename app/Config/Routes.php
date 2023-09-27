<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/MainMusic', 'MusicController::index');
$routes->post('/upload', 'MusicController::upload');
$routes->post('/create', 'MusicController::create');
$routes->get('/playlists/(:any)', 'MusicController::playlists/$1');
$routes->get('/search', 'MusicController::search');
$routes->post('/upload', 'MusicController::upload');
$routes->post('/add', 'MusicController::add');



