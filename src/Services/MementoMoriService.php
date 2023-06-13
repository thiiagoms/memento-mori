<?php

declare(strict_types=1);

namespace MementoMori\Services;

use Exception;
use MementoMori\Helpers\Printer;

/**
 * MementoMori Service
 *
 * @package MementoMori\Services
 * @author Thiago <thiiagoms@proton.me>
 * @version 1.0
 */
final class MementoMoriService
{
    /**
     * Check if it's a valid date
     *
     * @param string $date
     *
     * @return bool
     */
    private function validateDate(string $date): bool
    {
        $dateFormat = 'Y-m-d';

        $dateTime = \DateTime::createFromFormat($dateFormat, $date);
        $errors = \DateTime::getLastErrors();

        return ($dateTime && $errors['warning_count'] === 0 && $errors['error_count'] === 0);
    }

    /**
     * Calculate the difference between two dates
     *
     * @param string $userDate
     * @param string $currentDate
     *
     * @return array An associative array containing the number of days and years between the two dates.
     * @throws Exception
     */
    private function calculateDate(string $userDate, string $currentDate): array
    {
        $userDate = new \DateTime($userDate);
        $currentDate  = new \DateTime($currentDate);

        $interval = $userDate->diff($currentDate);

        return ['days' => $interval->days, 'years' => $interval->y];
    }


    /**
     * Generate a report based on the user's birth date.
     *
     * @param string $userBirthDate
     *
     * @return void
     * @throws Exception
     */
    public function report(string $userBirthDate): void
    {
        $isDate = $this->validateDate($userBirthDate);

        if (!$isDate) {
            Printer::error("Date {$userBirthDate} isn't a valid date");
            Printer::info("Date must be in Y-m-d format, like: 1990-01-30");
            exit;
        }

        $currentDate = date('Y-m-d');
        $humanLifeAverage = 80;

        $lived = $this->calculateDate($userBirthDate, $currentDate);

        $expectedLife  = date(
            'Y-m-d',
            strtotime(
                "+{$humanLifeAverage} years",
                strtotime($userBirthDate)
            )
        );

        $remainingLife = $this->calculateDate($expectedLife, $currentDate);

        Printer::success("🎂 You lived for {$lived['days']} days or ({$lived['years']} years)");
        Printer::warning("☠️ Remaining {$remainingLife['days']} days or ({$remainingLife['years']} years)");
    }
}
