<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\ClassMember;
use App\Models\ClassSchedule;
use App\Models\Schedule;
use App\Models\Teacher;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class ClassManagerController extends Controller
{
    public function createClass(Request $request) {
        try {
            $teacher_id = intval($request->get("teacher_id"));
            $name = $request->get("name");
            $goal = $request->get("goal");
            $start_date = $request->get("start_date");
            $end_date = $request->get("end_date");
            $max_student = intval($request->get("max_student"));
            $type = $request->get("type");
            $fee = intval($request->get("fee"));
            $level = $request->get("level");
            $days = $request->get("day");
            $time_slots = $request->get("time_slot");
            $new_class = Classes::create([
                "teacher_id" => $teacher_id,
                "name" => $name,
                "goal" => $goal,
                "start_date" => $start_date,
                "end_date" => $end_date,
                "max_student" => $max_student,
                "type" => $type,
                "fee" => $fee,
                "level" => $level,
            ]);
            foreach($days as $day){
                foreach($time_slots as $time_slot){
                    $kip = intval($time_slot);
                    $schedule = Schedule::where("day_of_week", $day)->where("time_slot", $kip)->first();
                    ClassSchedule::create([
                        "class_id" => $new_class->id,
                        "schedule_id" => $schedule->id
                    ]);
                }
                
            }
            return response()->json([
                'message' => "success",
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => $e->getMessage(),
                'code' => $e->getCode(),
            ], 500);
        }

    }
    public function deleteClass($id) {
        try {
            ClassSchedule::where('class_id', $id)->delete();
            Classes::Where("id", $id)->delete();
            return response()->json([
                'message' => "success",
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => $e->getMessage(),
                'code' => $e->getCode(),
            ], 500);
        }
    }
    public function getAllClass() {
        try {
            $classes = Classes::all();
            foreach ($classes as $class) {
                $teacher = Teacher::where("id", $class->teacher_id)->first();
                $current_student = ClassMember::where("class_id", $class->id)->where("status", 1)->count();
                $class["teacher_name"] = $teacher->name;
                $class["current_student"] = $current_student;
            }
            return $classes;
        } catch (Exception $e) {
            return response()->json([
                'error' => $e->getMessage(),
                'code' => $e->getCode(),
            ], 500);
        }
    }
    // cần thay cái user_id bằng auth->id
    public function registerClass(Request $request) {
        try {
            $user_id = $request->get("user_id");
            $class_id = $request->get("class_id");
            ClassMember::create([
                "user_id" => $user_id,
                "class_id" => $class_id
            ]);
            return response()->json([
                'message' => "success",
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => $e->getMessage(),
                'code' => $e->getCode(),
            ], 500);
        }
    }
    public function getStudentByStatus(Request $request) {
        try {
            $status = $request->get("status");
            $class_id = $request->get("class_id");
            $members = ClassMember::where("class_id", $class_id)->where("status", $status)->get();
            foreach ($members as $member) {
                $student = User::where("id",$member->user_id)->first();
                $member["name"] = $student->name;
                $member["email"] = $student->email;
                $member["avatar"] = $student->avatar;
            }
            return $members;
        } catch (Exception $e) {
            return response()->json([
                'error' => $e->getMessage(),
                'code' => $e->getCode(),
            ], 500);
        }
    }
    public function checkRequestMember(Request $request) {
        try {
            $id = $request->get("id");
            $class_member = ClassMember::where("id", $id)->first();
            $current_student = ClassMember::where("class_id", $class_member->class_id)->where("status", 1)->count();
            $class = Classes::where("id", $class_member->class_id)->first();
            if ($class->max_student > $current_student){
                ClassMember::where("id", $id)->update([
                    "status" => 1,
                ]);
                return response()->json([
                    'message' => "success",
                ]);
            } else {
                return response()->json([
                    'message' => "full",
                ]);
            }
            
        } catch (Exception $e) {
            return response()->json([
                'error' => $e->getMessage(),
                'code' => $e->getCode(),
            ], 500);
        }
    }

    public function deleteRequestMember($id) {
        try {
            ClassMember::where('id', $id)->delete();
            return response()->json([
                'message' => "success",
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => $e->getMessage(),
                'code' => $e->getCode(),
            ], 500);
        }
    }

    public function editClass(Request $request) {
        try {
            $class_id = $request->get('class_id');
            $name = $request->get('name');
            $start_date = $request->get('start_date');
            $end_date = $request->get('end_date');
            $max_student = $request->get('max_student');
            $level = $request->get("level");
            $type = $request->get("type");
            $goal = $request->get("goal");
            $fee = intval($request->get("fee"));
            Classes::where("id", $class_id)->update([
                "name" => $name,
                "goal" => $goal,
                "start_date" => $start_date,
                "end_date" => $end_date,
                "max_student" => $max_student,
                "type" => $type,
                "fee" => $fee,
                "level" => $level,
            ]);
            return response()->json([
                'message' => "success",
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => $e->getMessage(),
                'code' => $e->getCode(),
            ], 500);
        }
    }
}
