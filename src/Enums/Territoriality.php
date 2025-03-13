<?php
declare(strict_types=1);

namespace Covertier\Definitions\Enums;

enum Territoriality: int
{
    /* Limited Zone */
    case LIMITED_ZONE = 1;

    /* Limited Zone including certain states */
    case LIMITED_ZONE_SOME_STATES  = 2;

    /* All Country */
    case ALL_COUNTRY = 3;
}