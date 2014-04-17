<?php

Route::get('404', function()
{
    return View::make('404::error')->with('code', 404);
});