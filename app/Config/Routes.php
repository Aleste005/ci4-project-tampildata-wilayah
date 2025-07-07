<?php

use CodeIgniter\Router\RouteCollection;
/**
 * Author  : Almuhajir, Este
 * Project : Helpdesk CI4 - Konsep CI3
 * Company : Badan Kepegawaiann Aceh
 * Deskripsi: File ini berisi routing untuk aplikasi CI4 dengan gaya CI3. sudah saya ganti teknik routing nya 
 */
/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

// Tambahan: routing manual seperti di CI3
$routes->get('kecamatan', 'Kecamatan::index');
$routes->get('desa', 'Desa::index');
