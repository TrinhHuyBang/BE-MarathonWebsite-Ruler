<?php

namespace App\Http\Controllers;

use App\Http\Resources\TeacherResource;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function getListTeacher(){
        return TeacherResource::collection(Teacher::get());
    }

    public function getListComment($id){
        $comments = Teacher::find($id)->comments()->get();
        return $comments;
    }
    
}
