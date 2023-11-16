<?php

namespace App\Enums;

enum PaymentFrequencyEnum:string {

    case Weekly = 'weekly';

    case BiWeekly = 'bi_weekly';

    case Fortnightly = 'fortnightly';

    case LastWorkingDay = 'last_working_day';

    case SpecificDay = 'specific_day';

    case TwiceMonthly = 'twice_monthly';

    case FourWeekly = 'four_weekly';

    case LastFriday = 'last_friday';

    case LastThursday = 'last_thursday';

    case LastWednesday = 'last_wednesday';

    case LastTuesday = 'last_tuesday';

    case LastMonday = 'last_monday';

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