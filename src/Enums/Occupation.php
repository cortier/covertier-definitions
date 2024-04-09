<?php
declare(strict_types=1);

namespace Covertier\Definitions\Enums;

enum Occupation: string
{
    // Trader
    case TR = 'TR';

    // Employee
    case EM = 'EM';

    // Entrepreneur
    case EN = 'EN';

    // Licensee
    case LI = 'LI';

    // Other
    case OT = 'OT';

    // Transporter
    case TP = 'TP';

    // Home
    case HE = 'HE';
}