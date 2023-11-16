<?php

namespace App\Enums;

enum ResidentialStatusEnum:string {

    case HomeOwner = 'home_owner';

    case PrivateTenant = 'private_tenant';

    case CouncilTenant = 'council_tenant';

    case LivingWithParents = 'living_with_parents';

    case LivingWithFriends = 'living_with_friends';

    case StudentAccommodation = 'student_accommodation';

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