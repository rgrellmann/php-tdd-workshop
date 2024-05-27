<?php

namespace KataTests;

interface TimeProviderInterface
{
    public function currentTime(): \DateTime;
}
