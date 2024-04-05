<?php
declare(strict_types=1);

namespace Covertier\Catalog\Enums;
enum ResidenceType: string
{
    /* Temporary */
    case TE = 'TE';

    /* Permanent */
    case PE  = 'PE ';

    /* Non-resident */
    case NR = 'NR';
}
