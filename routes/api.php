<?php

use Illuminate\Routing\Route;

Route::get('/hi/{name}', function ($name) {
    return view($name);
});