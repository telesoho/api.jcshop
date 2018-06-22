<?php

use Illuminate\Http\Request;

/**
 * 客户端凭据授权令牌路由定义
 */

Route::middleware('client_credentials')->get('/testpass', function (Request $request) {
    return response()->json([
        'name' => 'Abigail',
        'state' => 'CA'
    ]);
});
