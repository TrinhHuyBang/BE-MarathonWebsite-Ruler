<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ReviewController extends Controller
{
    public function addReview(Request $request)
    {
        Log::info($request->all());
        $data = [
            'user_id' => $request->get('user_id'),
            'teacher_id' => $request->get('teacher_id'),
            'rating' => $request->get('rating'),
            'comment' => $request->get('comment'),
        ];
        $review = Comment::where(['user_id' => $request->get('user_id'), 'teacher_id' => $request->get('teacher_id')])->first();
        if($review){
            Comment::where(['user_id' => $request->get('user_id'), 'teacher_id' => $request->get('teacher_id')])->update(['rating' =>$request->get('rating'), 'comment' =>$request->get('comment')]);
            return response('OK', 200);
        } else {
            Comment::create($data);
            return response('OK', 200);
        }
    }

    public function addBookmark(Request $request){
        $data = [
            'user_id' => $request->get('user_id'),
            'teacher_id' => $request->get('teacher_id'),
            'bookmark' => $request->get('bookmark'),
        ];
    }
}
