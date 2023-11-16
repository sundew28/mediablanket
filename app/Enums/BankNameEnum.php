<?php

namespace App\Enums;

enum BankNameEnum:string {

    case Bos = 'bos';

    case Barclays = 'barclays';

    case Coop = 'coop';

    case FirstDirect = 'firstdirect';

    case Natwest = 'natwest';

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