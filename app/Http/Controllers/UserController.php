<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = UserModel::firstOrCreate(
            [
                'username' => 'Manager33',
                'nama' => 'Manager tiga tiga',
                'password' => ('12345'),
                'level_id' => 2,
            ],
        );
        $user->save();
        return view('user', ['data' => $user]);
    }
}