<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{
    public function bookmark (Request $request){
        $teacher_id = $request->get('teacher_id');
        $user_id = $request->get('user_id');
        $bookmark = Comment::where(['teacher_id' => $teacher_id, 'user_id' => $user_id])->first();
        if($bookmark){
            if($bookmark->bookmark == true){
                Comment::where(['teacher_id' => $teacher_id, 'user_id' => $user_id])->update(['bookmark' => false]);
            } 
            else{
                Comment::where(['teacher_id' => $teacher_id, 'user_id' => $user_id])->update(['bookmark' => true]);
            }
        } else {
            Comment::create(['teacher_id' => $teacher_id, 'user_id' => $user_id, 'bookmark' => true]);
        }
        return response()->json(['message' => 'success', 'user_id' => Auth::user()], 200);
    }
}
