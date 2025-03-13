<?php
declare(strict_types=1);

namespace Covertier\Definitions\Enums;
enum TaxEntityType: string
{
    /* Natural Person */
    case NP = 'NP';

    /* Legal Entity */
    case LE = 'LE';
}