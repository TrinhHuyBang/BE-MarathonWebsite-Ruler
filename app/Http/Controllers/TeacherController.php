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
    
    public function searchTeacher(Request $request){
        $query = Teacher::query();
        // Lấy giá trị tham số tìm kiếm từ request
        $searchTerm = $request->input('search');
        // Kiểm tra nếu có giá trị tìm kiếm được cung cấp
        if ($searchTerm) {
            // Sử dụng phương thức where để tìm kiếm trong các trường name và level và address và sex
            $query->where('name', 'LIKE', "%{$searchTerm}%")
                ->orWhere('level', 'LIKE', "%{$searchTerm}%")
                ->orWhere('address', 'LIKE', "%{$searchTerm}%")
                ->orWhere('sex', 'LIKE', "%{$searchTerm}%")
                ->orWhere('level', 'LIKE', "%{$searchTerm}%");

            // Sử dụng phương thức whereHas để tìm kiếm trong các trường name và type và level của bảng "classes"
            $query->orWhereHas('teacher_class', function ($q) use ($searchTerm) {
                $q->where('name', 'LIKE', "%{$searchTerm}%")
                    ->orWhere('type', 'LIKE', "%{$searchTerm}%")
                    ->orWhere('level', 'LIKE', "%{$searchTerm}%");
            });
        }

        // Thực hiện truy vấn và lấy kết quả
        $results = $query->get();

        // Trả về kết quả cho view hoặc làm bất kỳ thao tác nào khác

        return TeacherResource::collection($results);
    }
}
