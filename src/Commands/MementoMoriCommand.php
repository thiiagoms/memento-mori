<?php

declare(strict_types=1);

namespace MementoMori\Commands;

use MementoMori\Services\MementoMoriService;

/**
 * Main command
 *
 * @package MementoMori\Commands
 * @author Thiago <thiiagoms@proton.me>
 * @version 1.0
 */
final class MementoMoriCommand
{
    private MementoMoriService $mementoMoriService;

    /**
     * Init command with service
     *
     * @param MementoMoriService $mementoMoriService
     */
    public function __construct(MementoMoriService $mementoMoriService)
    {
        $this->mementoMoriService = $mementoMoriService;
    }

    /**
     * Generate a report about your lived days and how many still remain
     *
     * @param string $date The date for generating the report.
     *
     * @return void
     */
    public function report(string $date): void
    {
        $this->mementoMoriService->report($date);
    }
}
