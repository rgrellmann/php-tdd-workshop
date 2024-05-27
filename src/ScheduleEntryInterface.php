<?php

namespace Kata;

interface ScheduleEntryInterface
{
    public function getLowerBound(): string;
    public function getUpperBound(): string;
    public function getActivity(): string;
}