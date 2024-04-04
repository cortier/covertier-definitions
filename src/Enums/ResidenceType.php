<?php
declare(strict_types=1);

namespace Covertier\Catalog\Enums;
enum ResidenceType: string
{
    /* Temporary */
    case Temp = 'Temp';

    /* Permanent */
    case Perm = 'Perm';

    /* Non-resident */
    case NonResident = 'NonResident';
}
