<?php

namespace App\Enums;

enum EmploymentStatusEnum:string {

    case FullTime = 'full_time';

    case PartTime = 'part_time';

    case Temporary = 'temporary';

    case SelfEmployed = 'self_employed';

    case Unemployed = 'unemployed';

    case Pension = 'pension';

    case Disability = 'disability';

    case Benefits = 'benefits';

    case Student = 'student';

    public static function randomValue(): string
    {
        $arr = array_column(self::cases(), 'value');

        return $arr[array_rand($arr)];
    }

    public static function randomName(): string
    {
        $arr = array_column(self::cases(), 'name');

        return $arr[array_rand($arr)];
    }
}