<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Site::index');
$routes->setDefaultController('Site');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->setAutoRoute(true);
$routes->set404Override(function (){
    $data = ['titre'=>'Page non trouvée ',
            'description'=>'Bonjour, nous sommes désolés de constater que la ressource que vous recherchez n\'existe pas.'];
    return view('Pages/inc/entete404', $data)
        . view('Pages/404', $data)
        . view('Pages/inc/pied', $data);
});

//UTILISATEURS
$routes->get('/signin', 'Site::signin');
$routes->post('/signin', 'Site::signin');

$routes->get('/signinCours', 'Site::signinCours');
$routes->post('/signinCours', 'Site::signinCours');
$routes->get('/logout', 'Site::logout');

$routes->get('/contact', 'Site::contact');
$routes->get('/posts', 'Site::posts');
$routes->post('/posts', 'Site::posts');
$routes->get('/about', 'Site::about');

$routes->get('/ouvrages', 'Site::connexionLivres');
$routes->get('/cours', 'Site::connexionCours');

$routes->get('/livres', 'Site::ouvrages');

$routes->get('register', 'Site::register');
$routes->get('creationCompte', 'Site::saveUser');
$routes->post('creationCompte', 'Site::saveUser');
