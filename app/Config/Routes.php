<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Home route
$routes->get('/', 'HomeController::index'); // Pastikan 'HomeController' sesuai dengan nama kelas controller Anda

// Routes for PeriodeController
$routes->get('/periode', 'PeriodeController::index');
$routes->get('/periode/add', 'PeriodeController::add');
$routes->post('/periode/create', 'PeriodeController::create');
$routes->get('/periode/edit/(:segment)', 'PeriodeController::edit/$1');
$routes->post('/periode/update/(:segment)', 'PeriodeController::update/$1');
$routes->get('/periode/delete/(:segment)', 'PeriodeController::delete/$1');

// Routes for AlternatifController
$routes->get('/alternatif', 'AlternatifController::index');
$routes->get('/alternatif/add', 'AlternatifController::add');
$routes->post('/alternatif/create', 'AlternatifController::create');
$routes->get('/alternatif/edit/(:segment)', 'AlternatifController::edit/$1');
$routes->post('/alternatif/update/(:segment)', 'AlternatifController::update/$1');
$routes->get('/alternatif/delete/(:segment)', 'AlternatifController::delete/$1');

// Routes for KriteriaController
$routes->get('/kriteria', 'KriteriaController::index');
$routes->get('/kriteria/add', 'KriteriaController::add');
$routes->post('/kriteria/create', 'KriteriaController::create');
$routes->get('/kriteria/edit/(:segment)', 'KriteriaController::edit/$1');
$routes->post('/kriteria/update/(:segment)', 'KriteriaController::update/$1');
$routes->get('/kriteria/delete/(:segment)', 'KriteriaController::delete/$1');

// Routes for SubkriteriaController
$routes->get('/subkriteria', 'SubkriteriaController::index');
$routes->get('/subkriteria/add', 'SubkriteriaController::add');
$routes->post('/subkriteria/create', 'SubkriteriaController::create');
$routes->get('/subkriteria/edit/(:segment)', 'SubkriteriaController::edit/$1');
$routes->post('/subkriteria/update/(:segment)', 'SubkriteriaController::update/$1');
$routes->get('/subkriteria/delete/(:segment)', 'SubkriteriaController::delete/$1');

// Routes for UserController
$routes->get('/user', 'UserController::index');
$routes->get('/user/add', 'UserController::add');
$routes->post('/user/create', 'UserController::create');
$routes->get('/user/edit/(:segment)', 'UserController::edit/$1');
$routes->post('/user/update/(:segment)', 'UserController::update/$1');
$routes->get('/user/delete/(:segment)', 'UserController::delete/$1');

// Routes for MatriksKeputusanController
$routes->get('/matrikskeputusan', 'MatriksKeputusanController::index'); // Menampilkan daftar matriks keputusan
$routes->get('/matrikskeputusan/create', 'MatriksKeputusanController::create'); // Form tambah matriks keputusan
$routes->post('/matrikskeputusan/create', 'MatriksKeputusanController::store'); // Proses simpan data baru
$routes->get('/matrikskeputusan/edit/(:num)', 'MatriksKeputusanController::edit/$1'); // Form edit matriks keputusan berdasarkan kode_matriks
$routes->post('/matrikskeputusan/update/(:num)', 'MatriksKeputusanController::update/$1'); // Proses update data berdasarkan kode_matriks
$routes->get('/matrikskeputusan/delete/(:num)', 'MatriksKeputusanController::delete/$1'); // Proses hapus data berdasarkan kode_matriks



// router untuk perhitugan
// Rute untuk Matriks Keputusan
$routes->get('perhitungan/matriksKeputusan', 'PerhitunganController::matriksKeputusan');

// Rute untuk Normalisasi
$routes->get('perhitungan/normalisasi', 'PerhitunganController::normalisasi');

// Rute untuk Nilai Optimasi
$routes->get('perhitungan/nilaiOptimasi', 'PerhitunganController::nilaiOptimasi');

// Rute untuk Nilai Preferensi
$routes->get('perhitungan/nilaiPreferensi', 'PerhitunganController::nilaiPreferensi');

// Rute untuk Ranking
$routes->get('perhitungan/ranking', 'PerhitunganController::ranking');
