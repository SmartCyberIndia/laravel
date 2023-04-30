<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

final class Days extends Enum
{
    const Monday    = 1 << 0;
    const Tuesday   = 1 << 1;
    const Wednesday = 1 << 2;
    const Thursday  = 1 << 3;
    const Friday    = 1 << 4;
    const Saturday  = 1 << 5;
    const Sunday    = 1 << 6;

    // Shortcuts
    const Weekdays = self::Monday | self::Tuesday | self::Wednesday | self::Thursday | self::Friday;
    const Weekend = self::Saturday | self::Sunday;
}


// $activeDays = new Day([Day::Monday, Day::Wednesday, Day::Friday]);

// $activeDays; // 21
// $activeDays->hasFlag(Day::Monday); // true
// $activeDays->hasFlag(Day::Tuesday); // false

// $activeDays->getFlags(); // [Day::Monday(), Day::Wednesday(), Day::Friday()]

// // shortcuts
// Day::Weekend; // 96
// Day::Weekend()->getFlags(); // [Day::Saturday(), Day::Sunday(), Day::Weekend()]