<?php

namespace Kata;

class MorningRoutineReminder
{
    private array $schedule;

    private TimeProviderInterface $timeProvider;

    public function __construct(TimeProviderInterface $timeProvider)
    {
        $this->timeProvider = $timeProvider;
        $this->schedule = [
            new ScheduleEntry('06:00:00', '06:45:00', 'Do exercise'),
            new ScheduleEntry('06:45:00', '07:00:00', 'Take Shower'),
            new ScheduleEntry('07:00:00', '07:30:00', 'Read'),
            new ScheduleEntry('07:30:00', '08:00:00', 'Study'),
            new ScheduleEntry('08:00:00', '09:00:00', 'Have Breakfast')
        ];
    }

    public function getReminder(): string
    {
        $currentTime = $this->timeProvider->currentTime();

        foreach ($this->schedule as $scheduleEntry) {
            if ($currentTime >= new \DateTime($scheduleEntry->getLowerBound())
                && $currentTime < new \DateTime($scheduleEntry->getUpperBound())) {
                return $scheduleEntry->getActivity();
            }
        }

        return 'No activity';
    }
}