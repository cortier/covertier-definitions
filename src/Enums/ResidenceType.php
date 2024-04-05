<?php
declare(strict_types=1);

namespace Covertier\Definitions\Enums;
enum ResidenceType: string
{
    /* Temporary */
    case TE = 'TE';

    /* Permanent */
    case PE  = 'PE ';

    /* Non-resident */
    case NR = 'NR';
}
