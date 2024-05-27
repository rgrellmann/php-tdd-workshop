<?php

namespace KataTests;

class MorningRoutineReminder
{
    private array $schedule = [
        ['06:00:00', '07:00:00', 'Do exercise'],
        ['07:00:00', '08:00:00', 'Read and Study'],
        ['08:00:00', '09:00:00', 'Have Breakfast'],
    ];

    private TimeProviderInterface $timeProvider;

    public function __construct(TimeProviderInterface $timeProvider)
    {
        $this->timeProvider = $timeProvider;
    }

    public function getReminder(): string
    {
        $currentTime = $this->timeProvider->currentTime();

        foreach ($this->schedule as $scheduleEntry) {
            if ($currentTime >= new \DateTime($scheduleEntry[0]) && $currentTime < new \DateTime($scheduleEntry[1])) {
                return $scheduleEntry[2];
            }
        }

        return 'No activity';
    }
}