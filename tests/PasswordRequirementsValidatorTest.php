<?php

declare(strict_types=1);

namespace KataTests;

use Kata\PasswordRequirementsValidator;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

final class PasswordRequirementsValidatorTest extends TestCase
{
    public static function invalidPasswordDataProviderValidatorTypeOne(): iterable
    {
        yield "password too short" => ['rock_1A'];
        yield "password does not contain capital letter" => ['paperpaper1_'];
        yield "password does not contain lowercase letter" => ['SCISSORSSC1_ISSORS'];
        yield "password does not contain numbers" => ['ssSCISS_ORSSCISSORS'];
        yield "password does not contain underscore" => ['ssS112CISSORSSCISSORS'];
    }

    public static function validPasswordDataProviderValidatorTypeOne(): iterable
    {
        yield "password matches all requirements" => ['ssS112CISSO_RSSCISSORS'];
    }

    #[Test]
    #[DataProvider("invalidPasswordDataProviderValidatorTypeOne")]
    public function test_given_password_is_invalid_when_validate_false_is_returned(
        string $password
    ): void
    {
        $validator = new PasswordRequirementsValidator();

        self::assertFalse($validator->validate($password));
    }

    #[Test]
    #[DataProvider("validPasswordDataProviderValidatorTypeOne")]
    public function test_given_password_is_valid_when_validate_true_is_returned(
        string $password
    ): void
    {
        $validator = new PasswordRequirementsValidator();

        self::assertTrue($validator->validate($password));
    }
}
