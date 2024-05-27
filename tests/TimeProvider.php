<?php

namespace KataTests;

interface TimeProvider
{
    public function currentTime(): \DateTime;
}
