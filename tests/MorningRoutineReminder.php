<?php

namespace KataTests;

class MorningRoutineReminder
{

    private TimeProvider $timeProvider;

    public function __construct(TimeProvider $timeProvider)
    {
        $this->timeProvider = $timeProvider;
    }

    public function getReminder(): string
    {
        return '';
    }
}