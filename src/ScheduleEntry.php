<?php

namespace Kata;

class ScheduleEntry implements ScheduleEntryInterface
{
    private string $lowerBound;
    private string $upperBound;
    private string $activity;

    public function __construct(string $lowerBound, string $upperBound, string $activity) {
        $this->lowerBound = $lowerBound;
        $this->upperBound = $upperBound;
        $this->activity = $activity;
    }
    public function getLowerBound(): string
    {
        return $this->lowerBound;
    }

    public function getUpperBound(): string
    {
        return $this->upperBound;
    }

    public function getActivity(): string
    {
        return $this->activity;
    }
}