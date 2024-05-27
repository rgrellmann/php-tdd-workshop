<?php

declare(strict_types=1);

namespace Kata;

final class PasswordRequirementsValidator
{
    public function validate(string $password): bool
    {
        if (8 >= strlen($password)) {
            return false;
        }

        if (!preg_match('/[A-Z]/', $password)) {
            return false;
        }

        if (!preg_match('/[a-z]/', $password)) {
            return false;
        }

        if (!preg_match('/\d/', $password)) {
            return false;
        }

        if (!str_contains($password, '_')) {
            return false;
        }

        return true;
    }
}
