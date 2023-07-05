<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\ClassMember;
use App\Models\Teacher;
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
    public function getClass($id) {
        $classes =[];
        $class_members = ClassMember::where("user_id", $id)->get();
        // return $class_members;
        foreach ($class_members as $class_member) {
            $class_id = $class_member->class_id;
            $class = Classes::where("id", $class_id)->first();
            // return $class;
            $teacher = Teacher::where("id", $class->teacher_id)->first();
            array_push($classes, [
                "name_class" => $class->name,
                "teacher" => $teacher->name,
                "goal" => $class->goal,
                "fee" => $class->fee,
                "level" => $class->level,
                "type" => $class->type,
                "start_date" => $class->start_dateel,
                "end_date" => $class->end_date,

            ]);
        }
        return $classes;
    }

}
