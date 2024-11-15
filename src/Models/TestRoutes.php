<?php

namespace SendeoClientLaravel\Models;

class SendeoTestRoutes
{
    public function routes()
    {
        Route::get('/login', 'SendeoExamplesController@login');
        Route::get('/track-delivery', 'SendeoExamplesController@trackDelivery');
        Route::get('/cancel-delivery', 'SendeoExamplesController@cancelDelivery');
        //Route::get('/set-delivery', 'SendeoExamplesController@setDelivery');
    }
}

// Usage: web.php or api.php file in Laravel
// use SendeoClientLaravel\Models\SendeoTestRoutes;
// SendeoTestRoutes::routes();