<?php

Route::get('404', function()
{
    return View::make('404::error')->with('code', 404);
});

Route::get('500', function()
{
    return View::make('404::error')->with('code', 500);
});

Route::get('503', function()
{
    return View::make('404::error')->with('code', 503);
});