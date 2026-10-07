<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('tasks', 'TasksController::index');
$routes->get('profile', 'ProfileController::index');
$routes->get('about', 'AboutController::index');