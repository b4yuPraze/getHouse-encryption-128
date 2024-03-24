<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


/* Routes Administrator

    [ Controller View Admin ]
    
*/
$routes->get("administrator", "Admin::index");
$routes->get("administrator/kelolaSertifikat", "Admin::manageCertificate");
$routes->get("administrator/kelolaPeserta", "Admin::manageParticipants");
$routes->get("administrator/kelolaPengguna", "Admin::manageUsers");
$routes->get("administrator/print/(:any)", "Admin::printCertificate/$1");

$routes->get("auth", "Admin::signin");
$routes->post("auth/login", "Admin::login");
$routes->get("auth/logout", "Admin::logout");
/* Routes Administrator

    [ Controller Functions Admin ]
    
*/
$routes->post('administrator/addUsers', 'Admin::addUsers');
$routes->post('administrator/editUsers', 'Admin::editUsers');
$routes->get('administrator/deleteUsers/(:any)', 'Admin::deleteUsers/$1');
$routes->post('administrator/addParticipants', 'Admin::addParticipants');
$routes->post('administrator/editParticipants', 'Admin::editParticipants');
$routes->get('administrator/deleteParticipants/(:any)', 'Admin::deleteParticipants/$1');
$routes->post('administrator/importExcel', 'Admin::importData');