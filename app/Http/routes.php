<?php

    // ===============================================
    // STATIC PAGES ==================================
    // ===============================================

    // show a static view for the home page (app/views/home.blade.php)
    Route::get('/home', function()
    {
        return View::make('home');
    });

    // about page (app/views/about.blade.php)
    Route::get('/about', function()
    {
        return View::make('about');
    });

    // work page (app/views/work.blade.php)
    Route::get('/work', array('as' => 'work', function()
    {
        return View::make('work');
    }));
	
	Route::get('games', function () {
    return view('games');
});