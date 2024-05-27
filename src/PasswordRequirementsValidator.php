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

        if (!$this->stringContainsUppercaseLetter($password)) {
            return false;
        }

        if (!$this->stringContainsLowercaseLetter($password)) {
            return false;
        }

        if (!$this->stringContainsNumber($password)) {
            return false;
        }

        if (!$this->stringContainsUnderscore($password)) {
            return false;
        }

        return true;
    }

    private function stringContainsUppercaseLetter(string $password): bool
    {
        if (!preg_match('/[A-Z]/', $password)) {
            return false;
        }
        return true;
    }

    private function stringContainsLowercaseLetter(string $password): bool
    {
        if (!preg_match('/[a-z]/', $password)) {
            return false;
        }
        return true;
    }

    private function stringContainsNumber(string $password): bool
    {
        if (!preg_match('/\d/', $password)) {
            return false;
        }
        return true;
    }
    private function stringContainsUnderscore(string $password): bool
    {
        if (!str_contains($password, "_")) {
            return false;
        }
        return true;
    }
}
