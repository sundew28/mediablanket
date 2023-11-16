<?php

namespace App\Enums;

enum LoanPurposeEnum:string {

    case DebtConsolidation = 'debt_consolidation';

    case CarPurchase = 'car_purchase';

    case CarOther = 'car_other';

    case ShortTermCash = 'short_term_cash';

    case HomeImprovements = 'home_improvements';

    case PayBills = 'pay_bills';

    case OneOffPurchase = 'one_off_purchase';

    case SpecialOccasion = 'special_occasion';

    case Other = 'other';

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