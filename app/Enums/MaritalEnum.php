<?php

namespace App\Enums;

enum MaritalEnum:string {

    case SINGLE = 'single';

    case MARRIED = 'married';

    case LIVINGTOGETHER = 'living_together';

    case SEPERATED = 'separated';

    case DIVORCED = 'divorced';

    case WIDOWED = 'widowed';

    case OTHER = 'other';

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