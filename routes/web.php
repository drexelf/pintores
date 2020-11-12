<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Controlador@login');

Route::post('/valida','Controlador@validarlogin');

Route::get('/inicio','Controlador@ini');

Route::get('/edm','Controlador@edvard');

Route::get('/ldv','Controlador@leo');

Route::get('/ma','Controlador@miguel');

Route::get('/pc','Controlador@pic');

Route::get('/vg','Controlador@van');