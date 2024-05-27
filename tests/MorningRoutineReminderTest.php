<?php

declare(strict_types=1);

namespace KataTests;

use Kata\MorningRoutineReminder;
use Kata\TimeProviderInterface;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

final class MorningRoutineReminderTest extends TestCase
{
    public static function morningRoutines(): iterable
    {
        yield 'reminder for 6 to 6:44' => ['06:05:00', 'Do exercise'];
        yield 'reminder for 6:45 to 6:59' => ['06:50:00', 'Take Shower'];
        yield 'reminder for 7 to 7:29' => ['07:05:00', 'Read'];
        yield 'reminder for 7:30 to 7:59' => ['07:45:00', 'Study'];
        yield 'reminder for 8 to 8:59' => ['08:05:00', 'Have Breakfast'];
        yield 'reminder for other times' => ['10:00:00', 'No activity'];
    }
    #[Test]
    #[DataProvider('morningRoutines')]
    public function testMorningRoutineReminder($time, $expectedReminder): void
    {
        $timeProvider = $this->createStub(TimeProviderInterface::class);
        $timeProvider->method('currentTime')->willReturn(new \DateTime($time));
        $morningRoutineReminder = new MorningRoutineReminder($timeProvider);

        self::assertSame($expectedReminder, $morningRoutineReminder->getReminder());
    }
}
