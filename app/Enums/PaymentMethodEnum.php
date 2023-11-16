<?php

namespace App\Enums;

enum PaymentMethodEnum:string {

    case Weekly = 'uk_direct_deposit';

    case NonUkDirectDeposit = 'non_uk_direct_deposit';

    case Cash = 'cash';

    case Cheque = 'cheque';

    case None = 'none';

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