<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

    $router->resource('properties', PropertyController::class);

    $router->resource('market-share-notes', MarketShareNoteController::class);

    $router->resource('people', PersonController::class);

    $router->resource('agents', AgentController::class);

    $router->resource('sellers', SellerController::class);

    $router->resource('subleases', SubleaseController::class);

    $router->resource('show-logs', ShowLogController::class);

    $router->resource('offer-logs', OfferLogController::class);
});
