<?php

namespace App\Enums;

enum TitleEnum:string {

    case MR = 'mr';

    case MRS = 'mrs';

    case MISS = 'miss';

    case MS = 'ms';

    case DR = 'dr';

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