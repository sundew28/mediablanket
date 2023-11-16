<?php

namespace App\Enums;

enum EmploymentIndustryEnum:string {

    case ConstructionManufacturing = 'construction_manufacturing';

    case Military = 'military';

    case Health = 'health';

    case BankingInsurance = 'banking_insurance';

    case Education = 'education';

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