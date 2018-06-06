<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TestDb extends Controller
{
    public function index() {
        $users = DB::table('user')
            ->where('username','=','twh')
            ->get();
        var_dump($users);
        exit(0);
        // return view('user.index', ['users' => $users]);
    }
}
