<?php

namespace App\Enums;

enum GenderEnum:string {

    case MALE = 'male';

    case FEMALE = 'female';

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