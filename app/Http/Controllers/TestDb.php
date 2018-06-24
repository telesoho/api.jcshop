<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TestDb extends Controller
{
    /**
     * @OAS\Post(
     *     path="/TestDb",
     *     summary="Create user",
     *     description="This can only be done by the logged in user.",
     *     operationId="index",
     *     @OAS\Response(
     *         response=200,
     *         description="pet response",
     *         @OAS\MediaType(
     *             mediaType="application/json",
     *             @OAS\Schema(
     *                 ref="/docdata.json"
     *             ),
     *         ),
     *      )
     * )
     */

    public function index() {
        return response()->json([
            'name' => 'Abigail',
            'state' => 'CA'
        ]);
    
        // $users = DB::table('user')
        //     ->where('username','=','twh')
        //     ->get();
        // var_dump($users);
        // exit(0);
        // return view('user.index', ['users' => $users]);
    }
}
