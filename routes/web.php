<?php
/**
 * 路由配置
 * author:lajixiaohao
 * github:https://github.com/lajixiaohao/wei-admin-plus-api
 * date:2022.6.20
 * */

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

$router->get('/', function () use ($router) {
    // return $router->app->version();
    return response()->json(['code'=>1, 'msg'=>'Bad Request'], 400);
});

$router->group(['prefix'=>'api'], function () use ($router) {
    // 获取验证码
    $router->get('get-captcha', 'CaptchaController@get');
});
