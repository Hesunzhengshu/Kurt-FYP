<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller //继承了controller
{
    //测试控制器路由
    public function test1(){
        return phpinfo();
    }
}
