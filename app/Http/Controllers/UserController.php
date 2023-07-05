<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(){
        
    }
    public function editInfo(Request $request){
        $user_id = $request->get("user_id");
        $avatar = $request->get("avatar");
        $name = $request->get("name");
        $email = $request->get("email");
        $address = $request->get("address");
        $level = $request->get("level");
        $sex = $request->get("sex");
        return User::Where("id", $user_id)->update([
            "name" => $name,
            "email" => $email,
            "sex" => $sex,
            "address" => $address,
            "level" => $level,
            "avatar" => $avatar
        ]);
    }
}
