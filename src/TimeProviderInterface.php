<?php

namespace Kata;

interface TimeProviderInterface
{
    public function currentTime(): \DateTime;
}
