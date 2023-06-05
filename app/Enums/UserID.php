<?php

declare(strict_types=1);

namespace App\Enums;

use App\Models\Classes;
use App\Models\ClassSchedule;
use App\Models\Schedule;
use BenSampo\Enum\Enum;
use App\Models\User;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class UserID extends Enum
{
    public static function getAll()
    {
        // return 
        return User::get()->toArray();
    }



    public static function getLabel($user_id)
    {
        $rs = null;
        foreach (self::getAll() as $item) {
            if ($item["id"] === $user_id) {
                $rs = $item;
                break;
            }
        }
        return $rs;
    }
    public static function getClass($user_id)
    {
        $classes = Classes::where('teacher_id', $user_id)->get()->toArray();
        $rs = [];
        foreach ($classes as $class) {
            $array_schedule = [];
            $class_schedule_list = ClassSchedule::where('class_id', $class["id"])->get();
            foreach ($class_schedule_list as $class_schedule) {
                $schedule_id = $class_schedule->schedule_id;
                $schedule = Schedule::where('id', $schedule_id)->first();

                array_push(
                    $array_schedule,
                    [
                        "day_of_week" => $schedule->day_of_week,
                        "time_slot" => $schedule->time_slot,
                    ]
                );
            }



            array_push(
                $rs,
                [
                    "id" => $class["id"],
                    "name" => $class["name"],
                    "type" => $class["type"],
                    "start_date" => $class["start_date"],
                    "end_date" => $class["end_date"],
                    "max_student" => $class["max_student"],
                    "day_of_week" => $schedule->day_of_week,
                    "time_slot" => $schedule->time_slot,
                    "schedule_list" => $array_schedule

                ]
            );
        }
        return $rs;
    }
}
