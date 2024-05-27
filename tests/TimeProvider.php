<?php

namespace KataTests;

class TimeProvider implements TimeProviderInterface
{

    public function currentTime(): \DateTime
    {
        return new \DateTime();
    }
}