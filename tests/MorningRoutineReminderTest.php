<?php

declare(strict_types=1);

namespace KataTests;

use Kata\ChangeMe;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

final class MorningRoutineReminderTest extends TestCase
{
    public static function morningRoutines(): iterable
    {
        yield 'reminder for 6 to 6:59' => ['06:05:00', 'Do exercise'];
        yield 'reminder for 7 to 7:59' => ['07:05:00', 'Read and Study'];
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
