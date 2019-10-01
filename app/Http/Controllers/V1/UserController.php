<?php
/**
 * Created by PhpStorm.
 * User: EDWARD OSORIO
 * Date: 30/09/2019
 * Time: 4:40 PM
 */

namespace App\Http\Controllers\V1;


use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Tymon\JWTAuth\Exceptions\JWTException;

class UserController extends Controller
{

    public function __construct()
    {
        //
    }

    public function store(Request $request){
       $data = $request->all();
       $data['password'] = app('hash')->make($data['password']);
       return User::create($data);
    }

}