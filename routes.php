<?php
// Definim les rutes
return [
    '/' => 'App/Controllers/FilmController@index',
    '/index.php' => 'App/Controllers/FilmController@index',
    '/index' => 'App/Controllers/FilmController@index',
    '/home' => 'App/Controllers/FilmController@index',
    '/create' => 'App/Controllers/FilmController@create',
    '/store' => 'App/Controllers/FilmController@store',
    '/edit' => 'App/Controllers/FilmController@edit',
    '/update' => 'App/Controllers/FilmController@update',
    '/delete' => 'App/Controllers/FilmController@delete',
    '/destroy' => 'App/Controllers/FilmController@destroy',
    '/show' => 'App/Controllers/FilmController@show',
    '/films' => 'App/Controllers/FilmController@films',

    // Routes per actors
    '/actors' => 'App/Controllers/ActorController@actors',
    '/createActor' => 'App/Controllers/ActorController@createActor',
    '/storeActor' => 'App/Controllers/ActorController@storeActor',
    '/editActor' => 'App/Controllers/ActorController@editActor',
    '/updateActor' => 'App/Controllers/ActorController@updateActor',
    '/deleteActor' => 'App/Controllers/ActorController@deleteActor',
    '/showActor' => 'App/Controllers/ActorController@showActor',
];

