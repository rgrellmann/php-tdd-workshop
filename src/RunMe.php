<?php

declare(strict_types=1);

namespace Kata;

include __DIR__ . '/TimeProviderInterface.php';
include __DIR__ . '/TimeProvider.php';
include __DIR__ . '/ScheduleEntryInterface.php';
include __DIR__ . '/ScheduleEntry.php';
include __DIR__ . '/MorningRoutineReminder.php';


$reminder = new MorningRoutineReminder(new TimeProvider());

echo $reminder->getReminder();
