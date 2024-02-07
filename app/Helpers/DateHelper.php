<?php

namespace App\Helpers;

use DateTime;

final class DateHelper
{
    private const DAYS_RELATIVE = [
        -1 => 'yesterday',
        0 => 'today',
        1 => 'tomorrow',
    ];

    /**
     * Formats dateTime and substitutes date by a relative label if possible.
     * Use concatenation if time is needed
     */
    public static function formatRelative(
        DateTime $dateTime,
        string $dateFormat = 'Y-m-d',
        string $concatenation = null,
        string $timeFormat = 'H:i'): string
    {
        $diffInDays = +now()->diff($dateTime)->format('%R%a');
        $date = self::DAYS_RELATIVE[$diffInDays] ?? $dateTime->format($dateFormat);

        if ($concatenation !== null) {
            return $date . $concatenation . $dateTime->format($timeFormat);
        }

        return $date;
    }
}
