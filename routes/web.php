<?php
/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
$router->get('/','HomeController@index');
$router->get('/product/{id}','ProductController@product_detail');
$router->get('/login','MemberController@login');
$router->post('/login','MemberController@loginProses');

$router->group([
    'prefix' => 'brand',
], function ($router) {

    $router->group([
        'prefix' => 'ready_stock',
    ], function ($router) {
        $router->get('/','BrandController@ready_stock');
        $router->get('{brand_id}','ProductController@list_ready_stock');
    });

    $router->group([
        'prefix' => 'po',
    ], function ($router) {
        $router->get('/','BrandController@po');
        $router->get('{brand_id}','ProductController@list_po');
    });

});
