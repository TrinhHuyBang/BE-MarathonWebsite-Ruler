<?php

namespace App\Http\Controllers;

use App\Http\Resources\TeacherResource;
use App\Models\Classes;
use App\Models\ClassSchedule;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Models\Teacher;
use Illuminate\Support\Facades\Log;

class MatchingController extends Controller
{
    public function matching (Request $request) 
    {
        $so_luong = $request->get('dem');
        $salaryF = $request->get('salary');
        $addressF = $request->get('address');
        $sexF = $request->get('sex');
        $ageF = $request->get('age');
        $goalF = $request->get('goal');
        $levelF = $request->get('level');
        $day_of_weekF = $request->get('day_of_week');
        $time_slotF = $request->get('time_slot');
        $teachers = TeacherResource::collection(Teacher::get());
        $points = [];
        
        foreach ($teachers as $teacher) {
            // giá
            if ($salaryF){
                $salaryB = 1 - abs($salaryF - $teacher->salary) / $salaryF;
                if ($salaryB < 0){
                    $salaryB = 0;
                }
            } else {
                $salaryB = 0;
            }
            // địa chỉ
            if ($addressF !== 'All') {
                if ($teacher->address === $addressF) {
                    $addressB = 1;
                } else {
                    $addressB = 0;
                }
            } else {
                $addressB = 0;
            }
            // giới tính
            if ($sexF !== 'All') {
                if ($teacher->sex === $sexF) {
                    $sexB = 1;
                } else {
                    $sexB = 0;
                }
            } else {
                $sexB = 0;
            }
            // tuổi
            if ($ageF) {
                $ageB = 1- abs($ageF - $teacher->age) / $ageF;
                if ($ageB < 0){
                    $ageB = 0;
                }
            } else {
                $ageB = 0;
            }
            // mục tiêu
            
            $classAll = Teacher::find($teacher->id)->teacher_class()->get();
            if ($goalF !== 'All') {
                $goalB = 0;
                foreach ($classAll as $class) {
                    $goal = $class->goal;
                    if ($goal === $goalF) {
                        $goalB = 1;
                        break;
                    } 
                }
            } else {
                $goalB = 0;
            }
            // cấp độ của lớp
            if ($levelF !== 'All') {
                $levelB = 0;
                foreach ($classAll as $class) {
                    $level = $class->level;
                    $levelC = 1- abs(config("level.$level") - $levelF) / $levelF;
                    if ($levelC < 0) {
                        $levelC = 0;
                    } else {
                        if ($levelC > $levelB) {
                            $levelB = $levelC;
                        }
                    }
                }
            } else {
                $levelB = 0;
            }
            // thời gian
            if ($day_of_weekF !== 'All') {
                if ($time_slotF !== 'All') {
                    $timeB = 0;
                    foreach ($classAll as $class) {
                        $classC = 0;
                        $scheduleClassAll = Classes::find($class->id)->schedule_class()->get();
                        foreach ($scheduleClassAll as $scheduleClass) {
                            $schedule = Schedule::find($scheduleClass->schedule_id)->first();
                            $day = $schedule->day_of_week;
                            $day_of_weekB = 1 - abs($day_of_weekF - config("dayOfweek.$day")) / $day_of_weekF;
                            $time_slotB = 1 - abs($time_slotF - $schedule->time_slot) / $time_slotF;
                            if ($day_of_weekB < 0) {
                                $day_of_weekB = 0;
                            }
                            if ($time_slotB < 0) {
                                $time_slotB = 0;
                            }
                            $classD = ($day_of_weekB + $time_slotB) / 2;
                            if ($classD > $classC) {
                                $classC = $classD;
                            }
                        }
                        if ($classC > $timeB) {
                            $timeB = $classC;
                        }
                    }
                } else {
                    $timeB = 0;
                    foreach ($classAll as $class) {
                        $classC = 0;
                        $scheduleClassAll = Classes::find($class->id)->schedule_class()->get();
                        foreach ($scheduleClassAll as $scheduleClass) {
                            $schedule = Schedule::find($scheduleClass->schedule_id)->first();
                            $day = $schedule->day_of_week;
                            $day_of_weekB = 1- abs($day_of_weekF - config("dayOfweek.$day")) / $day_of_weekF;
                            if ($day_of_weekB < 0) {
                                $day_of_weekB = 0;
                            }
                            if ($day_of_weekB > $classC) {
                                $classC = $day_of_weekB;
                            }
                        }
                        if ($classC > $timeB) {
                            $timeB = $classC;
                        }
                    }
                }
            } else {
                if ($time_slotF !== 'All') {
                    $timeB = 0;
                    foreach ($classAll as $class) {
                        $classC = 0;
                        $scheduleClassAll = Classes::find($class->id)->schedule_class()->get();
                        foreach ($scheduleClassAll as $scheduleClass) {
                            $schedule = Schedule::find($scheduleClass->schedule_id)->first();
                            $time_slotB = 1- abs($time_slotF - $schedule->time_slot) / $time_slotF;
                            if ($time_slotB < 0) {
                                $time_slotB = 0;
                            }
                            if ($time_slotB > $classC) {
                                $classC = $time_slotB;
                            }
                        }
                        if ($classC > $timeB) {
                            $timeB = $classC;
                        }
                    }
                } else {
                    $timeB = 0;
                }
            }
            $point = ($timeB + $goalB + $ageB + $sexB + $levelB + $addressB + $salaryB) / $so_luong;
            array_push($points,
                [
                    "teacher_id" => $teacher->id,
                    "point" => $point
                ]);
        }
        $point_sorts = collect($points)->sortByDesc('point')->values()->all();
        return $point_sorts;
    }
}
