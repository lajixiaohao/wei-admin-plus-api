<?php
/**
 * 基类控制器
 * author:lajixiaohao
 * github:https://github.com/lajixiaohao/wei-admin-plus-api
 * date:2022.6.20
 * */
namespace App\Http\Controllers;

use App\Helps\ApiResponse;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use ApiResponse;
    
    // Illuminate\Http\Request
    protected $request = null;
}
