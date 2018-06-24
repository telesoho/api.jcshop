<?php

use Illuminate\Http\Controller;

/**
 * 客户端凭据授权令牌路由定义
 */

Route::middleware('client_credentials')->get('/testpass', "TestDb@index");
