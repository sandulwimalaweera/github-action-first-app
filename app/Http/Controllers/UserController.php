<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUserDetails(){
        return response() -> json([
            'name' => 'John Doe',
            'role' => 'admin',
            'create_at' => 'today']);


    }

}
