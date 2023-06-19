<?php

namespace App\Http\Controllers;

use App\Http\Resources\TeacherResource;
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
        $day_of_week = $request->get('day_of_week');
        $day_of_weekF = config("dayOfWeek.$day_of_week");
        Log::info($day_of_weekF);
        $time_slotF = $request->get('time_slot');
        $teachers = TeacherResource::collection(Teacher::get());
        $points = [];
        foreach ($teachers as $index => $teacher) {
            // giá
            if ($salaryF){
                $salaryB = abs($salaryF - $teacher->salary) / $salaryF;
                if ($salaryB >= 1){
                    $salaryB = 0;
                }
            } else {
                $salaryB = 0;
            }
            // địa chỉ
            if ($addressF) {
                if (strpos($teacher->address, $addressF) !== false) {
                    $addressB = 1;
                } else {
                    $addressB = 0;
                }
            } else {
                $addressB = 0;
            }
            // giới tính
            if ($sexF) {
                if (strcmp($teacher->sex, $sexF) === 0) {
                    $sexB = 1;
                } else {
                    $sexB = 0;
                }
            } else {
                $sexB = 0;
            }
            // tuổi
            if ($ageF) {
                $ageB = abs($ageF - $teacher->age) / $ageF;
                if ($ageB >= 1){
                    $ageB = 0;
                }
            } else {
                $ageB = 0;
            }
            // mục tiêu
            if ($goalF) {
                if (strpos($teacher->goal, $goalF) !== false) {
                    $goalB = 1;
                } else {
                    $goalB = 0;
                }
            } else {
                $goalB = 0;
            }
            // cấp độ của lớp
            if ($levelF) {
                $levelB = 0;
                foreach ($teacher->classes as $class) {
                    $levelC = abs($class->level - $levelF) / $levelF;
                    if ($levelC >= 1) {
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
            if ($day_of_weekF) {
                if ($time_slotF) {
                    $timeB = 0;
                    foreach ($teacher->classes as $class) {
                        $classC = 0;
                        foreach ($class->schedule_list as $schedule) {
                            $day_of_weekB = abs($day_of_weekF - $schedule->day_of_week) / $day_of_weekF;
                            $time_slotB = abs($time_slotF - $schedule->time_slot) / $time_slotF;
                            if ($day_of_weekB >= 1) {
                                $day_of_weekB = 0;
                            }
                            if ($time_slotB >= 1) {
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
                    foreach ($teacher->classes as $class) {
                        $classC = 0;
                        foreach ($class->schedule_list as $schedule) {
                            $day_of_weekB = abs($day_of_weekF - $schedule->day_of_week) / $day_of_weekF;
                            if ($day_of_weekB >= 1) {
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
                if ($time_slotF) {
                    $timeB = 0;
                    foreach ($teacher->classes as $class) {
                        $classC = 0;
                        foreach ($class->schedule_list as $schedule) {
                            $time_slotB = abs($time_slotF - $schedule->time_slot) / $time_slotF;
                            if ($time_slotB >= 1) {
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
            $point = ($timeB + $goalB + $ageB + $sexB + $addressB + $salaryB) / $so_luong;
            array_push($points,
                [
                    "teacher_id" => $teacher->id,
                    "point" => $point
                ]);
        }
        return usort($points, function($a, $b) {
            return $b["point"] - $a["point"];
        });
    }
}
