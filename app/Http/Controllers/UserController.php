<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function register(Request $request){

        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);

        $collection = collect([
            ['name' => '山田', 'club' => '野球部'],
            ['name' => '鈴木', 'club' => 'サッカー部'],
            ['name' => '佐藤', 'club' => '卓球部'],
            ['name' => '田中', 'club' => '野球部'],
            ['name' => '山本', 'club' => '野球部']
        ]);
        $filtered = $collection->filter(function ($key, $value){
            return ($key['club'] == '野球部');
        });

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return view('user/login', compact('filtered'));
    }
}
