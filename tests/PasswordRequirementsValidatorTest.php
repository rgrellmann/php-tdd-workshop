<?php

declare(strict_types=1);

namespace KataTests;

use Kata\PasswordRequirementsValidator;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

final class PasswordRequirementsValidatorTest extends TestCase
{
    public static function dataProvider(): iterable
    {
        yield "password too short" => ['rock_1A', false];
        yield "password does not contain capital letter" => ['paperpaper1_', false];
        yield "password does not contain lowercase letter" => ['SCISSORSSC1_ISSORS', false];
        yield "password does not contain numbers" => ['ssSCISS_ORSSCISSORS', false];
        yield "password does not contain underscore" => ['ssS112CISSORSSCISSORS', false];
        yield "password does match all requirements" => ['ssS112CISSO_RSSCISSORS', true];
    }

    #[Test]
    #[DataProvider("dataProvider")]
    public function test_given_password_matching_all_requirements_when_validate_true_is_returned(
        string $password,
        bool   $expectedResult
    ): void
    {
        $validator = new PasswordRequirementsValidator();

        self::assertSame($expectedResult, $validator->validate($password));
    }
}
