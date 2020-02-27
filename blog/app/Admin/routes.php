<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->resource('demo/users', UserController::class);
    $router->resource('demo/movie', MovieController::class);
    $router->resource('demo/khdds', KhddController::class);
    $router->resource('demo/kcs', KcController::class);
    $router->resource('demo/cgdds', CgddController::class);
    $router->resource('demo/zzrys', ZzryController::class);
    $router->resource('demo/zcgls', ZcglController::class);
    $router->resource('demo/khgls', KhglController::class);
    $router->resource('demo/Cgxqs', CgxqController::class);
    $router->resource('demo/zcczs', ZcczController::class);
    $router->resource('demo/jpxxs', JpxxController::class);
    

});
