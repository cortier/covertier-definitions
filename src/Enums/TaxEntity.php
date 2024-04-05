<?php
declare(strict_types=1);

namespace Covertier\Catalogs\Enums;
enum TaxEntity: string
{
    /* Natural Person */
    case NP = 'NP';

    /* Legal Entity */
    case LE = 'LE';
}