<?php
declare(strict_types=1);

namespace Covertier\Catalogs\Enums;

enum Industry: string
{
    /* Industrial */
    case IN = 'IN';

    /* Commercial */
    case CO = 'CO';

    /* Services */
    case SE = 'SE';

    /* Public Services */
    case PS = 'PS';

    /* Private Services */
    case PV = 'PV';

    /* Transport */
    case TR = 'TR';

    /* Tourism */
    case TO = 'TO';

    /* Financial Institutions */
    case FI = 'FI';

    /* Education */
    case ED = 'ED';

    /* Health */
    case HE = 'HE';

    /* Bonds and Insurance */
    case BI = 'BI';

    /* Vulnerable Offering Services */
    case OS = 'OS';

    /* Vulnerable Other Activities */
    case OA = 'OA';

    /* Other Vulnerable Activities */
    case OV = 'OV';

    /* Other */
    case OT = 'OT';

    /* SOFOM ENR (Multiple Purpose Non-Regulated Financial Institution) */
    case SO = 'SO';

    /* Money Transmitter */
    case MT = 'MT';

    /* Currency Exchange Center */
    case CE = 'CE';
}