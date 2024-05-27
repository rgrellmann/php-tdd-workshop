<?php

namespace Kata;

enum Result
{
    case NUMBER_IS_LOWER;
    case NUMBER_IS_GREATER;
    case WON;
    case LOST;
    case TOO_MANY_TRIES;
}