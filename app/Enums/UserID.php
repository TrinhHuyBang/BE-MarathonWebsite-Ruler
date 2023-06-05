<?php declare(strict_types=1);

namespace App\Enums;

use App\Models\ClassSchedule;
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
        $classes = ClassSchedule::where('teacher_id', $user_id)->get()->toArray();
        $rs = [];
        foreach ($classes as $class) {
            array_push($rs, $class);
        }
        return $rs;
    }
}
