<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');


//creacion de Redireccion   
//http://localhost:8080/api/profesor
$routes->group('api', ['namespace' => 'App\Controllers\API'], function($routes){
//creacion de rutas para Profesor
	$routes->get('profesor', 'Profesor::index');
	
	//creando rutas para crear
	$routes->post('profesor/create', 'Profesor::create');
	//creando rutas para editar
	$routes->get('profesor/edit/(:num)', 'Profesor::edit/$1');
	//update
	$routes->put('profesor/update/(:num)', 'Profesor::update/$1');
	//delete
	$routes->put('profesor/delete/(:num)', 'Profesor::delete/$1');



});


//http://localhost:8080/api/v2/grado
$routes->group('api/v2', ['namespace' => 'App\Controllers\API'], function($routes){

	//ruta para grado
	$routes->get('grado', 'Grado::index');
	//creando rutas para crear
	$routes->post('grado/create', 'Grado::create');
	//creando rutas para editar
	$routes->get('grado/edit/(:num)', 'Grado::edit/$1');
	//update
	$routes->put('grado/update/(:num)', 'Grado::update/$1');
	//delete
	$routes->put('grado/delete/(:num)', 'Grado::delete/$1');

});



//http://localhost:8080/api/v3/estudiante
$routes->group('api/v3', ['namespace' => 'App\Controllers\API'], function($routes){

	//ruta para grado
	$routes->get('estudiante', 'Estudiante::index');
	//creando rutas para crear
	$routes->post('estudiante/create', 'Estudiante::create');
	//creando rutas para editar
	$routes->get('estudiante/edit/(:num)', 'Estudiante::edit/$1');
	//update
	$routes->put('estudiante/update/(:num)', 'Estudiante::update/$1');
	//delete
	$routes->put('estudiante/delete/(:num)', 'Estudiante::delete/$1');

});
/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
