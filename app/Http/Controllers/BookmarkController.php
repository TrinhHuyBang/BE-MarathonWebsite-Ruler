<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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

    public function getTeacherBookmark( $id){
        // $user_id = $request->get('user_id');
        $bookmarks = Comment::where('user_id', $id)->where('bookmark', 1)->get();
        $teachers = [];
        foreach($bookmarks as $bookmark){
            $teacher_id = $bookmark->teacher_id;
            $teacher = Teacher::where('id', $teacher_id)->first();
            $rating = 0;
            foreach($teacher->comments as $comment){
                $rating += $comment->rating;
            }
            $rating /= $teacher->comments->count();
            $teacher->rating = $rating;
            unset($teacher['comments']);
            array_push($teachers,$teacher);
        }

        // Log::info($bookmark);

        return $teachers;
    }
}