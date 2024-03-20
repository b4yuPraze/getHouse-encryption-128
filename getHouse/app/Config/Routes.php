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

/* Routes Administrator

    [ Controller Functions Admin ]
    
*/
$routes->post('administrator/addUsers', 'Admin::addUsers');