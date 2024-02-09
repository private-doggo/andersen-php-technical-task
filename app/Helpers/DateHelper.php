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
        $diffInDays = $dateTime->format('d') - now()->format('d');
        $date = self::DAYS_RELATIVE[$diffInDays] ?? $dateTime->format($dateFormat);

        return $date . (is_null($concatenation) ?: $concatenation . $dateTime->format($timeFormat));
    }
}
